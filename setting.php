
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                            <div class="card white visitors-card">
                                <div class="card-content">
								<form>
                                  <h4>Pengaturan</h4>
								  
								  <div class="time_period">
								  <p>Pengaturan Periode Waktu</p>
									  <select onchange="setTimePeriod(this.value)">
										<option value="15m" />15 Menit</option>
										<option value="30m" />30 Menit</option>
										<option value="45m" />45 Menit</option>
										<option value="1h" />1 Jam</option>
										<option value="2h" />2 Jam</option>
										<option value="3h" />3 Jam</option>
									  </select>
								  <p>Area</p>
									  <select onchange="setAreaPertime(this.value)">
										<option value="semua" />Semua Area</option>
										<option value="area1" />Area 1</option>
										<option value="area2" />Area 2</option>
										<option value="area3" />Area 3</option>
										<option value="area4" />Area 4</option>
										<option value="area5" />Area 5</option>
									  </select>
									</div>
									
									<h4>Notifikasi</h4>
									<div class="water_level">
									<p>Tingkat Air</p>
									  <select onchange="setWaterLevel(this.value)">
										<option value="active" />20 %</option>
										<option value="active" />40 %</option>
										<option value="active" />50 %</option>
										<option value="active" />60 %</option>
										<option value="active" />80 %</option>
										<option value="active" />100 %</option>
									  </select>
									<p>Area</p>
									  <select onchange="setTimePerlevel(this.value)">
										<option value="semua" />All Area</option>
										<option value="area1" />Area 1</option>
										<option value="area2" />Area 2</option>
										<option value="area3" />Area 3</option>
										<option value="area4" />Area 4</option>
										<option value="area5" />Area 5</option>
									  </select>
									</div>
									
									<div class="submit"><input type="button" value="Submit" onClick="" /></div>
								</form>
                                </div>
                            </div>
                        </div>
					</div>