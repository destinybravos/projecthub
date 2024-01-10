<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        include_once 'sidebar.php'; 
        include_once  'script.php';
        $summary = getPercentage();
    ?>

    <!-- Main Content -->
    <div id="main" class="min-h-screen -ml-0 md:ml-52 py-3 px-4 md:px-8">
        <div class="bg-blue-500 rounded-xl py-4 px-4 text-white shadow-xl">
            <h2 class="text-2xl">
                Dashboard
            </h2>
        </div>

        <!-- Other Content -->
        <div class="mt-5 grid md:grid-cols-3 grid-cols-1 gap-4">
            <div class="col-span-2 px-3 py-2">
               <div class="grid md:grid-cols-3 grid-cols-1 bg-blue-100 px-7 py-7 rounded-lg font-san relative mb-5">
                  <div class="col-span-2">
                        <div class="text-gray-700">
                            <p class="text-2xl text-blue-600">Welcome back <span><?php echo $user_data['fullname'] ?></p></span></p>
                            <p class="capitalize text-md font-semibold text-gray-600">supervisor: <?php echo (isset($supervisor) && $supervisor != '') ? $supervisor : 'Not Assigned' ?></p>
                            <p class="text-sm mt-2">You have gone <?php echo $summary->totalPercentage ?>% of your project.</p>
                            <p class="text-sm">Keep it put to get a faster result.</p>
                        </div>
                  </div>
                   <div class="col-span-1 ">
                        <div class="mx-auto">
                            <img src="/imgs/blue.png" alt="" class="w-60 lg:mx-0 mx-auto lg:absolute lg:right-2  lg:bottom-0">
                        </div>
                    </div>
                </div>  

                <div class="grid md:grid-cols-2 grid-cols-1 gap-3 mb-12">
                    <div class="shadow-lg bg-white rounded-lg py-5 px-4 font-san text-gray-700">
                        <span class="text-semibold text-md text-blue-600">Your Progress</span>
                        <div class="flex gap-3 mt-3">
                            <span>Proposal:</span>
                            <div class="mt-3 w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-<?php echo $summary->proposal == 100 ? 'green-500' : ($summary->proposal < 50 ? 'red-500' : 'blue-500') ?> h-1.5 rounded-full" style="width: <?php echo $summary->proposal ?>%"></div>
                            </div>
                        </div>

                        <div class="flex gap-3 mt-3">
                            <div class="flex-grow flex-shrink-0">Chapter One:</div>
                            <div class="mt-3 w-full bg-gray-200 rounded-full h-1.5 flex-initial">
                                <div class="bg-<?php echo $summary->chapter1 == 100 ? 'green-500' : ($summary->chapter1 < 50 ? 'red-500' : 'blue-500') ?> h-1.5 rounded-full" style="width: <?php echo $summary->chapter1 ?>%"></div>
                            </div>
                        </div>

                        <div class="flex gap-3 mt-3">
                            <div class="flex-grow flex-shrink-0">Chapter Two:</div>
                            <div class="mt-3 w-full bg-gray-200 rounded-full h-1.5 flex-initial">
                                <div class="bg-<?php echo $summary->chapter2 == 100 ? 'green-500' : ($summary->chapter2 < 50 ? 'red-500' : 'blue-500') ?> h-1.5 rounded-full" style="width: <?php echo $summary->chapter2 ?>%"></div>
                            </div>
                        </div>

                        <div class="flex gap-3 mt-3">
                            <div class="flex-grow flex-shrink-0">Chapter Three:</div>
                            <div class="mt-3 w-full bg-gray-200 rounded-full h-1.5 flex-initial">
                                <div class="bg-<?php echo $summary->chapter3 == 100 ? 'green-500' : ($summary->chapter3 < 50 ? 'red-500' : 'blue-500') ?> h-1.5 rounded-full" style="width: <?php echo $summary->chapter3 ?>%"></div>
                            </div>
                        </div>

                        <div class="flex gap-3 mt-3">
                            <div class="flex-grow flex-shrink-0">Chapter Four:</div>
                            <div class="mt-3 w-full bg-gray-200 rounded-full h-1.5 flex-initial">
                                <div class="bg-<?php echo $summary->chapter4 == 100 ? 'green-500' : ($summary->chapter4 < 50 ? 'red-500' : 'blue-500') ?> h-1.5 rounded-full" style="width: <?php echo $summary->chapter4 ?>%"></div>
                            </div>
                        </div>

                        <div class="flex gap-3 mt-3">
                            <div class="flex-grow flex-shrink-0">Chapter Five:</div>
                            <div class="mt-3 w-full bg-gray-200 rounded-full h-1.5 flex-initial">
                                <div class="bg-<?php echo $summary->chapter5 == 100 ? 'green-500' : ($summary->chapter5 < 50 ? 'red-500' : 'blue-500') ?> h-1.5 rounded-full" style="width: <?php echo $summary->chapter5 ?>%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg bg-white rounded-lg py-10">

                    </div>
                </div>

                <!-- <div class="grid md:grid-cols-3 grid-cols-1 gap-7">
                    <div class="bg-green-700 text-center text-white rounded-lg px-2 py-3 shadow-lg">
                        fvlfkglsr
                    </div>

                    <div class="bg-red-400 text-center text-white rounded-lg px-2 py-3 shadow-lg">
                        fvlfkglsr
                    </div>

                    <div class="bg-green-600 text-center text-white rounded-lg px-2 py-3 shadow-lg">
                        fvlfkglsr
                    </div>
                </div> -->
            </div>
            

            <div class="col-span-1  mx-auto ">
                <div class="bg-green-700 py-2 px-2 text-center text-gray-100 rounded-md">
                   All Comments
                </div>
                <!-- <form action="" method="post" class="mt-3">
                        <textarea name="correction" id="" cols="12" rows="3"></textarea>
                        <button class="bg-green-600 rounded-lg py-1 px-2 mt-3 text-white block">Send</button>
                </form> -->
                <div class="bg-white shadow-lg rounded-lg py-5 px-6 mt-3">
                    <div class="py-3 px-3 rounded-lg shadow-xl ">
                        <p class="text-gray-700 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam animi labore doloremque.</p>
                        <small class="text-gray-700 mt-4">1 hour ago</small>
                    </div>
                    <div class="py-3 px-3 rounded-lg shadow-xl ">
                        <p class="text-gray-700 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam animi labore doloremque.</p>
                        <small class="text-gray-700 mt-4">1 hour ago</small>
                    </div>

                    <div class="py-3 px-3 rounded-lg shadow-xl">
                        <p class="text-gray-700 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam animi labore doloremque.</p>
                        <small class="text-gray-700 mt-4">1 hour ago</small>
                    </div>
                </div>
        </div>

    </div>

    <?php include_once 'script.php'; ?>
   
</body>
</html>

<?php 
    function getPercentage(){
        $summary = new stdClass();
        $summary->proposal = getUnitPercent(0);
        $summary->chapter1 = getUnitPercent(1);
        $summary->chapter2 = getUnitPercent(2);
        $summary->chapter3 = getUnitPercent(3);
        $summary->chapter4 = getUnitPercent(4);
        $summary->chapter5 = getUnitPercent(5);

        $summary->totalPercentage = floor(($summary->proposal + $summary->chapter1 + $summary->chapter2 + $summary->chapter3 + $summary->chapter4 + $summary->chapter5) / 6);
        return $summary;
    }

    function getUnitPercent($unit) : int {
        $percent = 0;
        $student_id = $GLOBALS['user_id'];
        $conn = $GLOBALS['connect'];

        if ($unit == 0) {
            $query = mysqli_query($conn, "SELECT * FROM  proposal WHERE student_id='$student_id'");
        }elseif ($unit == 1) {
            $query = mysqli_query($conn, "SELECT * FROM  chapter1 WHERE student_id='$student_id'");
        }elseif ($unit == 2) {
            $query = mysqli_query($conn, "SELECT * FROM  chapter2 WHERE student_id='$student_id'");
        }elseif ($unit == 3) {
            $query = mysqli_query($conn, "SELECT * FROM  chapter3 WHERE student_id='$student_id'");
        }elseif ($unit == 4) {
            $query = mysqli_query($conn, "SELECT * FROM  chapter4 WHERE student_id='$student_id'");
        }elseif ($unit == 5) {
            $query = mysqli_query($conn, "SELECT * FROM  chapter5 WHERE student_id='$student_id'");
        }

        if(mysqli_num_rows($query) > 0){
            $data = mysqli_fetch_assoc($query);
            if ($data['status'] == 'started') {
                $percent = 25;
            }elseif ($data['status'] == 'approved') {
                $percent = 100;
            }else{
                $percent = 60;
            }
        }

        return $percent;
    }
?>
