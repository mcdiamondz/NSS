<?php

      if (isset($_POST['formname'])) {
        # code...

          switch ($_POST['formname']) {
              case 'opportunity':
                # code...
                      if(isset($_POST['row_delete'])){
                            $sql = "DELETE FROM opportunities WHERE Id = :id";

                            $values = array(':id' => $_POST['id']);

                            $data = $afrigrad->delete_query($sql, $values);

                        if($data){
                            echo "<div class='alert alert-success  alert-dismissible text-center'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                      <strong>Well done!</strong> Opportunity was successful deleted.
                                  </div>";
                        }
                        else{
                            echo "<div class='alert alert-danger alert-dismissible text-center'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                      <strong>Oh Snap!</strong> Opportunity delete was not successful.
                                  </div>";
                        }
                    }
                break;

            case 'category':
              # code...
                          if(isset($_POST['cat_delete'])){
                                $sql = "DELETE FROM categories WHERE Id = :id";

                                $values = array(':id' => $_POST['id']);

                                $data = $afrigrad->delete_query($sql, $values);

                            if($data){
                                echo "<div class='alert alert-success  alert-dismissible text-center'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                          <strong>Well done!</strong> Category was successful deleted.
                                      </div>";
                            }
                            else{
                                echo "<div class='alert alert-danger alert-dismissible text-center'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                          <strong>Oh Snap!</strong> Category delete was not successful.
                                      </div>";
                            }
                        }
              break;
            case 'delete_all_ads':


                        $sql = "DELETE FROM adverts";
                        $data = $afrigrad->delete($sql);
                        if($data){
                            echo "<div class='alert alert-success alert-dismissible text-center'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                      <strong>Well done!</strong> Successfully deleted all ads
                                  </div>";
                        }

              break;
            case 'oppremove':
              # code...
                      if(isset($_POST['remove'])){
                        $id = $_POST['id'];
                        $sql = "DELETE FROM saved WHERE id = :id";
                        $values = array(':id' => $id);
                        $afrigrad->delete_query($sql, $values);
                        if($data){
                          echo "<div class='alert alert-success alert-dismissible text-center'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                    <strong>Well done!</strong> Successfully deleted
                                </div>";
                        }
                      }
              break;
            case 'reportedlinks':
                      if(isset($_POST['resolve'])){
                        $id = $_POST['id'];
                        $sql = "DELETE FROM reported WHERE OpportunityId = :id";
                        $values = array(':id' => $id);
                        $afrigrad->delete_query($sql, $values);
                        if($data){
                          echo "<div class='alert alert-success alert-dismissible text-center'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                    <strong>Well done!</strong> Successfully resolved
                                </div>";
                        }
                      }
              break;
            default:
              # code...
              break;
          }
      }


          /*
                Multiple selection delete section
          */

      if (isset($_POST['formnamee'])) {
        # code...
          switch ($_POST['formnamee']) {

            case 'opp_multi_delete':
                  if(isset($_POST['multi_delete'])){

                          if(!empty($_POST['chckbox'])){
                            foreach ($_POST['chckbox'] as $id) {
                              # code...
                              $sql = "DELETE FROM opportunities WHERE Id = :id";
                              $values = array(':id' => $id);
                              $data = $afrigrad->delete_query($sql, $values);
                            }
                            if($data){
                              echo "<div class='alert alert-success alert-dismissible text-center'>
                                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                        <strong>Well done!</strong> Selected categories delete successfully.
                                    </div>";
                            }
                          }
                          else{
                              echo "<div class='alert alert-warning alert-dismissible text-center'>
                                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                        <strong>Opps!</strong> Select categories to delete.
                                    </div>";
                          }
                        }
              break;

            case 'categories':
              # code...
                  if(isset($_POST['multi_cat_delete'])){
                          if(!empty($_POST['chckbox'])){
                            foreach ($_POST['chckbox'] as $id) {
                              # code...
                              $sql = "DELETE FROM categories WHERE Id = :id";

                              $values = array(':id' => $id);

                              $data = $afrigrad->delete_query($sql, $values);
                            }
                            if($data){
                              echo "<div class='alert alert-success alert-dismissible text-center'>
                                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                        <strong>Well done!</strong> Selected categories have been delete successfully.
                                    </div>";
                            }
                          }
                          else{
                              echo "<div class='alert alert-warning alert-dismissible text-center'>
                                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                        <strong>Opps!</strong> Select categories to delete.
                                    </div>";
                          }
                        }
              break;

            case 'advert':
              # code...
                              if(isset($_POST['delete'])){
                                $id = $_POST['id'];
                                $sql = "DELETE FROM adverts WHERE id = :id";
                                $values = array(':id' => $id);
                                $data = $afrigrad->delete_query($sql, $values);
                                if($data){
                                    echo "<div class='alert alert-success alert-dismissible text-center'>
                                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                                              <strong>Well done!</strong> Successfully deleted all ads
                                          </div>";
                                }
                              }

              break;

            default:
              # code...
              break;
          }
      }


?>
