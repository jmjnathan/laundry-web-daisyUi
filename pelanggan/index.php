<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin Dashboard</title>
      <link href="../public/tailwind.css" rel="stylesheet">
      <style>
         .sidebar {
            width: 250px;
            height: 100%;
            background: white;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            padding-top: 4rem; 
         }
         .main-content {
            margin-left: 250px;
            padding: 20px;
            margin-top: 4rem; 
         }
         .navbar {
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            background: white;
            padding: 1rem;
            border-bottom: 1px solid #ddd;
            z-index: 1000; 
         }
         .toast {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px;
            border-radius: 5px;
            z-index: 1000;
            color: #fff;
            font-weight: bold;
         }
         .toast-success {
            background: green;
         }
      </style>
   </head>
   <body class="bg-gray-100 h-screen">
      <!-- Sidebar -->
      <div class="sidebar">
         <div class="p-4">
            <div class="item-center">
               <img src="../assets/img/laundry-logo-with-text-space-your-slogan_1447-1423.jpg" alt="Logo" class="w-[150px] h-auto">
            </div>
         <ul class="menu w-full">
               <li>
                  <a>
                     <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                     </svg>
                     Dashboard
                  </a>
               </li>
               <li>
                  <a>
                     <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                     Layanan
                  </a>
               </li>
               <li>
                  <a>
                     <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                     </svg>
                     Transaksi
                  </a>
               </li>
               <li>
               <a href="pelanggan.php">                     
                  <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                     </svg>
                     Pelanggan
                  </a>
               </li>
               </ul>
         </div>
      </div>

      <!-- Navbar -->
      <div class="navbar shadow-md">
         <div class="flex items-center justify-between">
            <div class="text-lg font-semibold">
               Welcome, <?php echo htmlspecialchars($name); ?>
            </div>
            <a href="logout.php" class="text-blue-600 hover:underline">
               Logout
            </a>
         </div>
      </div>


      <!-- Main Content -->
      <div class="main-content">
         <div class="bg-EAEFF2 p-3 rounded-lg">
            <div class="card bg-white shadow-xl rounded-xl w-auto"> 
               <div class="m-5">
                  <div class="pb-5 flex items-center">
                     <h2 class="text-2xl font-bold">Pelanggan</h2>
                     <a href="tambah.php" class="btn btn-info ml-auto shadow-sm text-white">Tambah Baru</a>
                  </div>


                  <div class="flex col-span-1 gap-4 w-full">
               <label class="form-control w-full">
                  <div class="label">
                     <span class="label-text">Nama</span>
                  </div>
                  <input type="text" placeholder="Cari Pelanggan" class="input input-bordered w-full" />
               </label>

               <label class="form-control w-full">
                  <div class="label">
                     <span class="label-text">Status</span>
                  </div>
                  <select class="select select-bordered w-full">
                     <option disabled selected>Pilih Status</option>
                     <option>Aktif</option>
                     <option>Non Aktif</option>
                  </select>
               </label>
            </div>

            <div class="overflow-x-auto justify-center mt-5">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th class="px-4 py-2">No</th>
                           <th class="px-4 py-2">Username</th>
                           <th class="px-4 py-2">Name</th>
                           <th class="px-4 py-2">Email</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           $sql = "SELECT * FROM pelanggan";
                           $result = mysqli_query($conn, $sql);
                           if (mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                 echo "<tr>";
                                 echo "<td class='border px-4 py-2'>" . $row['id'] . "</td>";
                                 echo "<td class='border px-4 py-2'>" . $row['username'] . "</td>";
                                 echo "<td class='border px-4 py-2'>" . $row['name'] . "</td>";
                                 echo "<td class='border px-4 py-2'>" . $row['email'] . "</td>";
                                 echo "</tr>";
                              }
                           }
                        ?>
                     </tbody>
                  </table>
               </div>
               

            </div>
         </div>
      </div>

      <!-- Toast Notifications -->
      <div id="toast-success" class="toast toast-success">
         Successfully logged in!
      </div>

      <script>
         document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('success')) {
               const toastSuccess = document.getElementById('toast-success');
               if (toastSuccess) {
                  toastSuccess.style.display = 'block';
                  setTimeout(() => toastSuccess.style.display = 'none', 3000); 
            }
         });
      </script>
   </body>
   </html>
