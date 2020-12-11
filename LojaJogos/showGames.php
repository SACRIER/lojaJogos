
							<?php
							class MostraJogo
							{

									public function Show(){
									include_once("conect.php");
									$cont = 0;
									$sql = "SELECT * FROM jogo";
									$res = mysqli_query($conn, $sql);
									
					                while($dados=mysqli_fetch_array($res)) {
									$linha=4;
					               	$id = $dados["id"];
					                $t = $dados["nome"];
					                $a = $dados["genero"];
					                $f1 = $dados["imagem"];
					             
									if ($linha==4){
									
										$linha=0;
									   }
									echo "
									<section class='tiles'>
										<article class='style6'>
											<span class='image'>
												<img src='$f1' alt='' width='300' height='250' />
											</span>
											<a href='jogo.php?id=$id'>
												<h2>$t</h2>
												<div class='content'>
													<p>Genero <b>$a</b></p>
												</div>
											</a>
										</article>
									
									</section>
		                            ";
									$cont++;
									$linha++;
									
									if ($cont == 20) {
									 break;
								   }
								}
							}
							
							}
							$ShowGames = new MostraJogo();
							$ShowGames->Show();
							?>