<div class="col-12 text-center mb-10">
	<h1 class="display-4 pt-4">
		Data Asset Workshop IT
	</h1>
	<hr class="one" style="height: 5px;width: 50vh;border-radius: 20px;background: linear-gradient(to right, #2D2A70,#ed6b23);"><br>
</div>
<!-- form pencarian data -->
  <div class="container">
		<form action="<?= base_url('cari'); ?>" method="post"><br>
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
			<div class="input-group mb-3 ">
					<input type="text" style="border-radius:20px; width:180px;" class="form-control" placeholder="Masukan Nama / Merk / Nomor Seri / Nomot Inventaris" name="keyword" autocomplete="off" autofocus>
							<div class="input-group-append">
									<input type="submit" name="submit" style="background-color:#2D2A70; color:#ffff; border-radius:20px; width:120px;">
							</div>
			</div>
		</form>
  </div>
