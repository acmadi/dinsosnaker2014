<script type="text/javascript">
function proses(){
    var tahun = $("#tahun").val();
    if(tahun == "")
        jAlert("Maaf, tahun BAPERTARUM harus diisi", "PERHATIAN");
    else
        $("#frm").submit();
}
</script>


<table width="1024" border="0" cellspacing="2" cellpadding="5">
      <tr> 
      <!-- Header -->
          <td>
        	<div id='header' style='background:url(./image/coba/header2.png) no-repeat;'>
              <table border="0" id='atasan'>
                        <tr>
                                <td colspan='2' style="text-align:right; padding-right:10px;">
                                <h1><a style="color:#AA9F00;" href=""></a></h1>
                                </td>
                        </tr>
                        <tr>
                            <td style="text-align:left; padding-left:10px; border-left:0px solid black;"><a href='./?mod=rekap_bapertarum'> 
								<span></span> REKAP DATA BAPERTARUM </a>
                                 <span> </span> <img src="./image/panah.gif" /> <span></span></td>
                            <td><img  align="right" width="90" height="29" onclick="document.location.href='./'" 
                                onmouseout="this.src='./image/button/KEMBALI.gif'" onmouseover="this.src='./image/button/KEMBALI2.gif'" src="./image/button/KEMBALI.gif"></img>
                                </td>
                        </tr>
                    </table>            
                    </div>
            <br>
        </td>
  </tr>
  <tr>
  	<td>
    <div id='content' style='padding-top:10px;'>	<br>
		<form name="frm" id="frm" action="cetak/laporan_rekap/bapertarum/rekap_bapertarum.php" method="post" target="_blank">
			<div class="panelcontainer" style="width: 100%;">
				<h3>FILTER DATA REKAP</h3>
				<div class="bodypanel bodyfilter" id="bodyfilter">
					<table border="0px" cellspacing='0' cellpadding='0' width='100%'>
						<tr>
							<td width='70%'>
								<label>Pilih SKPD :</label>
								<select name="kode_skpd" id="kode_skpd">
									<option value="all">:::: SEMUA SKPD ::::</option>
								<?php
									$res_skpd = mysql_query("SELECT * FROM ref_skpd ORDER BY skpd ASC");
									while($ds_skpd = mysql_fetch_array($res_skpd)){
										echo("<option value='" . $ds_skpd["kode_skpd"] . "'>" . $ds_skpd["skpd"] . "</option>");
									}
								?>
								</select>
							</td>
						</tr>
					</table>
					<table>
						<tr>
							<td width="40%">
								<label>Tahun Pelaporan BAPERTARUM :</label>
								<input type="text" name="tahun" id="tahun" placeholder=":: Tahun Pelaporan BAPERTARUM ::" />
							</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					<div class="kelang"></div>
					<table border="0px" cellspacing='0' cellpadding='0' width='20%'>
						<tr>
							<td>
								<button type="button" class="btn btn-lg btn-success" onclick="proses();">Proses</button>
								<button type="reset" class="btn btn-lg btn-default">Reset</button>
							</td>
						</tr>
					</table>
				</div>
			</div>
			</form>

	</div>
</td>
</tr>
<tr>
    <td align="center" valign="middle">
    <div id='menu' style='border:0px solid black;'>
                    <nav>
                            <ul>
                                    <li><img src='./image/list.png'>&nbsp;&nbsp;<a href='./'>BERANDA UTAMA</a></li>
                                    <li><img src='./image/list.png'>&nbsp;&nbsp;<a href='./?mod=latar_belakang'>LATAR BELAKANG</a></li>
                                    <li><img src='./image/list.png'>&nbsp;&nbsp;<a href='./?mod=berita_dan_informasi'>BERITA DAN INFORMASI</a></li>
									<li><img src='./image/list.png'>&nbsp;&nbsp;<a href='./?mod=fdownload'>FILE DOWNLOAD</a></li>
                                </ul>
                    </nav>
    </div>
    </td>
</tr>
<tr>
     <td><br><div id='footer'></div></td>
 </tr>
 </table>
 
<div class="kelang"></div>
<iframe name="hasil_laporan" style="border: solid 1px #CCC; width: 100%;"></iframe>