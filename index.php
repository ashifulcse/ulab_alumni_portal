<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> University Alumni Website </title>
    <link rel="stylesheet" href="assets/css/theme.css"> 
    <link rel="stylesheet" href="assets/css/dashboard.css"> 
</head>

<body>

<div class="main_body">
  
<?php
    include 'navbar.php';
    include 'config.php';
    $result = mysqli_query($db,"SELECT * FROM news");
?> 

    <link rel="stylesheet" href="assets/css/news.css">
    <link rel="stylesheet" href="assets/css/alumni_list.css" />
    <div class="row" style="height:100%;">
        <div class="col-md-12" style="height:100%; overflow-y: scroll;">

            <h1 class="text-center"> Welcome to Ulab Alumni Portal </h1>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p> 

            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-left"> Executive Committee </h1>

                    <div class="row" style="width: 98%;">
                        <div class="col-md-4">  
                            <article class="card border curve">
                                <div>
                                    <img src="https://us.123rf.com/450wm/apoev/apoev1903/apoev190300009/apoev190300009.jpg?ver=6" alt="image" />
                                </div>

                                <div class="my-3">
                                    <h3 class="mb-0"><strong>Md. Zahidul Islam</strong></h3>
                                    <p><strong>Advisor </strong></p>
                                    
                                    <p>
                                        zahidul.islam@ulab.edu.bd
                                    </p>
                                    <p>
                                        01711-0000000
                                    </p> 
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4">  
                            <article class="card border curve">
                                <div>
                                    <img src="https://us.123rf.com/450wm/apoev/apoev1903/apoev190300009/apoev190300009.jpg?ver=6" alt="image" />
                                </div>

                                <div class="my-3">
                                    <h3 class="mb-0"><strong>Sazzadul Islam Shykat</strong></h3>
                                    <p><strong>President</strong></p>
                                    
                                    <p>
                                        sazzadul.islam.cse@ulab.edu.bd
                                    </p>
                                    <p>
                                        01616-498901
                                    </p> 
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4">  
                            <article class="card border curve">
                                <div>
                                    <img src="https://us.123rf.com/450wm/apoev/apoev1903/apoev190300009/apoev190300009.jpg?ver=6" alt="image" />
                                </div>

                                <div class="my-3">
                                    <h3 class="mb-0"><strong>Abrar Mahbub</strong></h3>
                                    <p><strong>Vice-President</strong></p>
                                    
                                    <p>
                                        abrar.mahbub.cse@ulab.edu.bd
                                    </p>
                                    <p>
                                        01711-000000
                                    </p> 
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4">  
                            <article class="card border curve">
                                <div>
                                    <img src="https://us.123rf.com/450wm/apoev/apoev1903/apoev190300009/apoev190300009.jpg?ver=6" alt="image" />
                                </div>

                                <div class="my-3">
                                    <h3 class="mb-0"><strong>Rezwan Ahmed</strong></h3>
                                    <p><strong>Secretary</strong></p>
                                    
                                    <p>
                                        rezwan.ahmed.cse@ulab.edu.bd
                                    </p>
                                    <p>
                                        01711-000000
                                    </p> 
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row" style="width: 98%">
                <div class="col-md-12 mb-5">
                    <h1 class="text-left"> News & Events </h1> 
                    <main>
                    <?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>

                            <div class='news_card'> 
                                <div class='module'>
                                    <div class='thumbnail'>
                                        <img src="images/<?php echo $row['uploadfile']; ?>"> 
                                    </div>
                                    <div class='content'> 
                                        <h1 class='title'><?php echo $row["title"]; ?></h1> 
                                        <div class="description"><?php echo $row["decs"]; ?></div>
                                        <div class="meta">
                                            <span class="timestamp"> Date: 
                                            <i class='fa fa-clock-o'></i> <?php echo $row["create_at"]; ?>
                                            </span>
                                            <br> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                            $i++;
                            }
                        ?> 
                    </main> 
                </div>
            </div>
        </div>

        <!-- <div class="col-md-4">
            <?php // include 'messages.php';?> 
        </div> -->
    </div>
  
 
<?php include 'footer.php';?>