<?php 
include("../config.php");
$key = ")r5r9r(>UB`oFNF2}4Lp";

if($_POST)
{
	$sec = $_POST["sec"];
	if($sec == $key)
	{
	$queryz = $baglanti->prepare("select * from support where state != 2 and username != 'jeffreynero' ");
    $queryz->execute();		
	foreach($queryz as $value)
	{
			echo '<div class="todo-item all-list">
                                            <div class="todo-item-inner">
                                                <div class="n-chk text-center">
                                             
                                                </div>

                                                <div class="todo-content">
                                                    <h5 class="todo-heading" data-todoheading="'.$value["ID"].'|'.$value["baslik"].'('.$value["username"].')">'.$value["ID"].' | '.$value["baslik"].' ('.$value["username"].')</h5>
                                                    <p class="meta-date">'.$value["date"].'</p>
                                                   <p class="todo-text" data-todoHtml="<p>'.$value["mesaj"].'</p>" data-todoText="{"ops":[{"insert":"'.$value["mesaj"].'.\n"}]}">'.$value["mesaj"].'</p>


													
                                                </div>

                                                <div class="priority-dropdown custom-dropdown-icon">
                                                    <div class="dropdown p-dropdown">

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-1">
                                                            <a class="dropdown-item danger" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> High</a>
                                                            <a class="dropdown-item warning" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> Middle</a>
                                                            <a class="dropdown-item primary" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> Low</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="action-dropdown custom-dropdown-icon">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                                                            <a class="edit dropdown-item" href="javascript:void(0);">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
';
}
	
}
}

?>