    <?php
        require_once 'config/db_connect.php';

        $query = "select * from pengaturan";
        $result = $mysqli->query($query);
        if($result == true){
            $data = $result->fetch_assoc();
        }
    ?>
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                            <div class="card white visitors-card">
                                <div class="card-content">
								<form action="" method="post">
                                  <h4>Pengaturan</h4>
								  
								  <div class="time_period">
								  <p>Pengaturan Periode Waktu</p>
									  <select onchange="setTimePeriod(this.value)" name="periode">
									   <?php
                                          if($data['periode'] >= 60){
                                              $periode = $data['periode'] / 60 ." jam";
                                          }
                                          else{
                                              $periode = $data['periode'] ." menit";
                                          }
                                          echo "<option value='$data[periode]' />$periode</option>";
                                          ?>
										<option value="15" />15 Menit</option>
										<option value="30" />30 Menit</option>
										<option value="45" />45 Menit</option>
										<option value="60" />1 Jam</option>
										<option value="120" />2 Jam</option>
										<option value="180" />3 Jam</option>
									  </select>
								  <p>Area</p>
									  <select onchange="setAreaPertime(this.value)" name="area_p">
									   <?php
                                          if($data['area_p'] != 'semua'){
                                              $area_p = ucwords("area ".$data['area_p']);
                                          }
                                          else{
                                              $area_p = ucwords($data['area_p']." area");
                                          }
                                          echo "<option value='$data[area_p]' />$area_p</option>";
                                          ?>
										<option value="semua" />Semua Area</option>
										<option value="1" />Area 1</option>
										<option value="2" />Area 2</option>
										<option value="3" />Area 3</option>
										<option value="4" />Area 4</option>
										<option value="5" />Area 5</option>
									  </select>
									</div>
									
									<h4>Notifikasi</h4>
									<div class="water_level">
									<p>Tingkat Air</p>
									  <select onchange="setWaterLevel(this.value)" name="tingkat_air">
									   <?php echo "<option value='$data[tingkat_air]' />$data[tingkat_air] %</option>"?>
										<option value="20" />20 %</option>
										<option value="40" />40 %</option>
										<option value="50" />50 %</option>
										<option value="60" />60 %</option>
										<option value="80" />80 %</option>
										<option value="100" />100 %</option>
									  </select>
									  
									<p>Area</p>
									  <select onchange="setTimePerlevel(this.value)" name="area_t">
									   <?php
                                          if($data['area_t'] != 'semua'){
                                              $area_t = ucwords("area ".$data['area_t']);
                                          }
                                          else{
                                              $area_t = ucwords($data['area_t']." area");
                                          }
                                          echo "<option value='$data[area_t]' />$area_t</option>";
                                          ?>
										<option value="semua" />Semua Area</option>
										<option value="1" />Area 1</option>
										<option value="2" />Area 2</option>
										<option value="3" />Area 3</option>
										<option value="4" />Area 4</option>
										<option value="5" />Area 5</option>
									  </select>
									</div>
									
									<div class="submit"><input type="submit" name="submit" value="Submit" onClick="" /></div>
								</form>
                                </div>
                            </div>
                        </div>
					</div>
					<?php
                    if(isset($_POST['submit'])){
                        $tingkat_air = $_POST['tingkat_air'];
                        $area_p = $_POST['area_p'];
                        $periode = $_POST['periode'];
                        $area_t = $_POST['area_t'];
                        
                        $query = "update pengaturan set periode='$periode', tingkat_air='$tingkat_air', area_p='$area_p',area_t='$area_t'";
                        $result = $mysqli->query($query);
                        if($result === true){
                            echo "<script>alert('pengaturan berhasil di update');</script>";
                        }
                    }

                    ?>