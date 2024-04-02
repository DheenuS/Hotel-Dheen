<!doctype html>

<html>



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com">

    </script>

    <!-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"> -->

    </script>

</head>

<!-- <script>
    tailwind.config = {
        darkMode: 'class',
    }
</script> -->

<style>
    .dark-mode {
        background-color: rgb(12, 12, 23);
        color: white;
    }
</style>



<body class="dark-mode">
    <div class="justify-center grid items-center h-screen">
        <div class="bg-dark-mode-yellow">
            <p class="text-dark-mode-black">GeeksForGeeks</p>
            <button class="border p-2" onclick="document.body.classList.toggle('dark-mode')">
                Dark Mode
            </button>
        </div>
    </div>
</body>
</html>