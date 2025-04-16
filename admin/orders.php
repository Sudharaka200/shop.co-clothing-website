<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- import files -->
    <?php include '../library/head.php'; ?>
    <?php include '../library/adminNav.php'; ?>
    
    <br><br>
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h2>Orders</h2>
        
    <div>
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y-2 divide-gray-200">
        <thead class="ltr:text-left rtl:text-right">
          <tr class="*:font-medium *:text-gray-900">
            <th class="px-3 py-2 whitespace-nowrap">Name</th>
            <th class="px-3 py-2 whitespace-nowrap">DoB</th>
            <th class="px-3 py-2 whitespace-nowrap">Role</th>
            <th class="px-3 py-2 whitespace-nowrap">Salary</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
          <tr class="*:text-gray-900 *:first:font-medium">
            <td class="px-3 py-2 whitespace-nowrap">Nandor the Relentless</td>
            <td class="px-3 py-2 whitespace-nowrap">04/06/1262</td>
            <td class="px-3 py-2 whitespace-nowrap">Vampire Warrior</td>
            <td class="px-3 py-2 whitespace-nowrap">$0</td>
          </tr>

          <tr class="*:text-gray-900 *:first:font-medium">
            <td class="px-3 py-2 whitespace-nowrap">Laszlo Cravensworth</td>
            <td class="px-3 py-2 whitespace-nowrap">19/10/1678</td>
            <td class="px-3 py-2 whitespace-nowrap">Vampire Gentleman</td>
            <td class="px-3 py-2 whitespace-nowrap">$0</td>
          </tr>

          <tr class="*:text-gray-900 *:first:font-medium">
            <td class="px-3 py-2 whitespace-nowrap">Nadja</td>
            <td class="px-3 py-2 whitespace-nowrap">15/03/1593</td>
            <td class="px-3 py-2 whitespace-nowrap">Vampire Seductress</td>
            <td class="px-3 py-2 whitespace-nowrap">$0</td>
          </tr>

          <tr class="*:text-gray-900 *:first:font-medium">
            <td class="px-3 py-2 whitespace-nowrap">Colin Robinson</td>
            <td class="px-3 py-2 whitespace-nowrap">01/09/1971</td>
            <td class="px-3 py-2 whitespace-nowrap">Energy Vampire</td>
            <td class="px-3 py-2 whitespace-nowrap">$53,000</td>
          </tr>

          <tr class="*:text-gray-900 *:first:font-medium">
            <td class="px-3 py-2 whitespace-nowrap">Guillermo de la Cruz</td>
            <td class="px-3 py-2 whitespace-nowrap">18/11/1991</td>
            <td class="px-3 py-2 whitespace-nowrap">Familiar/Vampire Hunter</td>
            <td class="px-3 py-2 whitespace-nowrap">$0</td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
    </div>

    
    
</body>
</html>

