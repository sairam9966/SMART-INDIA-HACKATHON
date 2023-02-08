<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Custom Range Slider | CodingNepal</title>
    <link rel="stylesheet" href="test.css">
</head>

<body>
    <div class="range">
        <div class="range-wrap">
            <input type="range" class="range" min="0" max="10" step="1">
            <output class="bubble"></output>
        </div>
    </div>



    <script>
        const allRanges = document.querySelectorAll(".range-wrap");
        allRanges.forEach((wrap) => {
            const range = wrap.querySelector(".range");
            const bubble = wrap.querySelector(".bubble");

            range.addEventListener("input", () => {
                setBubble(range, bubble);
            });

            // setting bubble on DOM load
            setBubble(range, bubble);
        });

        function setBubble(range, bubble) {
            const val = range.value;

            const min = range.min || 0;
            const max = range.max || 100;

            const offset = Number(((val - min) * 100) / (max - min));

            bubble.textContent = val;

            // yes, 14px is a magic number
            bubble.style.left = `calc(${offset}% - 14px)`;
        }
    </script>


</body>

</html>