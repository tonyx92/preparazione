<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
<?php include './db/db_connection.php'; ?>
<?php include './include/functions/functions.php'; ?>






  






    

                        <?php

                        if (isset($_GET['source'])) {
                            
                            $source = $_GET['source'];



                        }else{
                            $source = "";
                        }

                        switch ($source) {
                            

                            case 'update_form':

                                include "include/forms/update_form.php";
                                
                                break;
                            
                         
                        }


                        ?>





                           
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



