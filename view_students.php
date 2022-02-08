<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adim Dashboard</title>
    <link href="css/tailwind.min.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="AOS/aos-master/aos-master/dist/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-100">
    
<!-- Header -->
    <header class="sticky top-0 w-full  z-10">
        <?php include_once 'page_head.php'; ?>
    </header>

    <!-- Side Bar -->
        <?php 
            include_once 'admin_sidebar.php'; 
            include_once  'script.php';
        
        ?>
    
    <!-- Main Content -->
    <div id="main" class="min-h-screen -ml-0 md:ml-52 py-3 px-4 md:px-8">
        
        <div class="bg-blue-500 rounded-xl py-4 px-4 text-white shadow-xl">
            <h2 class="text-2xl">
               View Students
            </h2>
        </div>

        <!-- other content -->

        <div class="mt-5 grid md:grid-cols-1 grid-cols-1 font-san gap-6">
            <div class="col-span-2 px-4 space-y-3">
                <div>
                    View Students Details!
                </div>
                    <!-- other content -->
                <div class="space-y-3">
                    <div class="flex rounded-lg divide-x font-san shadow-lg text-md text-gray-700">
                        <div class="bg-white py-2 px-1 border-gray-500 rounded-l-lg">
                            SN
                        </div>
                        <div class="bg-white py-2 px-2 flex-grow">
                            Fullname
                        </div>
                        <div class="bg-white py-2 px-2 w-60 truncate">
                            Reg NO
                        </div>
                        <div class="bg-white py-2 px-2 ">
                           Level
                        </div>
                        <div class="bg-white py-2 px-2">
                          Programme
                        </div>
                        <div class="bg-white py-2 px-2 rounded-r-lg">
                          Phone
                        </div>
                    </div>

                    <?php 
                        include_once 'connect.php';

                        $SN = 0;

                        $sql = "SELECT * FROM users";
                        if($result = mysqli_query($conn, $sql)){
                            if(mysqli_num_rows($result) > 0){
                               
                                while($row = mysqli_fetch_array($result)){
                                    if ($row['role'] != 'admin'){
                                        if($row['role'] == 'student') {
                                            $SN++;
                                            ?>
                                            <div class="flex rounded-lg divide-x font-san shadow-lg text-md text-gray-700">
                                                <div class="bg-white py-2 px-1 border-gray-500 rounded-l-lg">
                                                    <?php  echo $SN?>
                                                </div>
                                                <div class="bg-white py-2 px-2 flex-grow">
                                                        <?php echo $row['fullname'] ?>
                                                </div>
                                                <div class="bg-white py-2 px-2 w-60 truncate">
                                                        <?php echo $row['regno'] ?>
                                                </div>
                                                <div class="bg-white py-2 px-2">
                                                        <?php echo $row['level'] ?>
                                                </div>
                                                <div class="bg-white py-2 px-2">
                                                        <?php echo $row['programme'] ?>
                                                </div>
                                                <div class="bg-white py-2 px-2 rounded-r-lg">
                                                        <?php echo $row['phone'] ?>
                                                </div>
                                            </div>
                                      <?php
                                        }
                                        
                                        
                                    }
                                    
                                
                                }
                               
                            }
                            
                        }

                        
                        
                    ?>
                   
                    


                </div>
            </div>

           
        </div>
    </div>
</body>
</html>