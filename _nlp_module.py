#!C:\Users\MY PC\AppData\Local\Programs\Python\Python310\python.exe
# pip install -U spacy
# python -m spacy download en_core_web_lg
# pip install mysql.connector

# ah paina packages install cheyandi, ah e_core_lg almost 1gb vuntadhi

import spacy
import mysql.connector
from mysql.connector import Error
import pandas as pd

nlp = spacy.load("en_core_web_lg")

# Indhulo me connection details pettandi
connection = mysql.connector.connect(host='localhost',
                                        database='sih',
                                        user='root')

# this should show you the database name to confirm it is connected to your db                                        
if connection.is_connected():
    db_Info = connection.get_server_info()
    print("Connected to MySQL Server version ", db_Info)
    cursor = connection.cursor()
    cursor.execute("select database();")
    record = cursor.fetchone()
    print("You're connected to database: ", record)

# me table nundi we are the gettting the id and idea sentence into pandas dataframe.
# Table name and column names correct ga ivvandi
query  = """select id, short_desc from student_ideas;"""
text_df = pd.read_sql(query,connection)
# ikkada oka latest sentence tho migathavi check cheyali kadhati take the last sentense as reference sentence
n = text_df.id.max()
ref_sentence = text_df.loc[text_df['id'] == n,'short_desc'].iloc[0]
# Ikkada spacy nlp loki feed chesthunam ah ref text ni 
ref_sentence_vec = nlp(ref_sentence)
#check_all = [nlp(row) for row in text_df['idea']]
text_df_id = text_df.set_index('id')
check_dict = text_df_id.to_dict()['short_desc']
for i in check_dict:
    check_dict[i] = nlp(check_dict[i])
sim_score = []
doc_id = []

for i in check_dict:
    sim_s = check_dict[i].similarity(ref_sentence_vec)
    sim_score.append(sim_s)
    doc_id.append(i)
    scores_with_doc_id = pd.DataFrame(list(zip(doc_id,sim_score)), columns=["doc_id","similary_score"])
print(scores_with_doc_id)
# Paina manam chesina dhaniki same sentence tho kuda compare cheskuntadhi so score 1 vuntadhi so we are eliminating 
# that row from the table
final_scores_table = scores_with_doc_id.loc[scores_with_doc_id['doc_id'] != n]

# Ippudu similarity score 80% kante ekkuva vunte you are storing those values in a list, percentage mere set cheskondi
similar_texts_ids = final_scores_table.loc[final_scores_table['similary_score'] >= 0.90, 'doc_id'].to_list()

# list lo emi lev ante then you don't have similar ideas kadha so you put "Accept" in status column 
# for respective applicant ledhante you will put "Reject" ani
# if not similar_texts_ids:
#     cursor.execute(f'INSERT INTO student_ideas (status) VALUES("Accept") where id = {n};')
# else:
#     cursor.execute(f'INSERT INTO student_ideas (status) VALUES("Reject") where id = {n};')

if not similar_texts_ids:
    cursor.execute(f'update student_ideas set status="Accept" where id = {n};')
else:
    cursor.execute(f'update student_ideas set status="Reject" where id = {n};')

# Last lo close the mysql database connection
connection.commit()
connection.close()






