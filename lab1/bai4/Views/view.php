<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

</head>
<body>
  
    
    <h1>Lab1.4 PC05314 Kim Thanh Loi</h1>
  
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Email
                </th>
                <th scope="col" class="px-6 py-3">
                   Fristname
                </th>
                <th scope="col" class="px-6 py-3">
                   lastname
                </th>
                <th scope="col" class="px-6 py-3">
                   create_at
                </th>
                <th scope="col" class="px-6 py-3">
                Edit
                    
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $item) {
                extract($item) ;
                ?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 <?= $email ?>
                </th>
                <td class="px-6 py-4">
                <?= $firstname ?>
                </td>
                <td class="px-6 py-4">
                <?= $lastname ?>
                </td>
                <td class="px-6 py-4">
                <?= $create_at ?>
                </td>
                <td class="px-6 py-4 ">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
</div>

    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>