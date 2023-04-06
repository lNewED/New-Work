<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div  class="row">
				<div class="col-sm-12">
					<br><br>
				<h4>ฟอร์มชำระเงิน ถ้าเลือกรูปแบบการชำระเงินเป็นโอนเงิน จะแสดงลิสธนาคารให้เลือก</h4>
				
			</div>

				<div class="col-sm-3">
					<form  method="get" action="./Controller/New.php" enctype="multipart/form-data" >
						<div class="form-group row">
						<label for="cashmethod">เลือกวิธีชำระเงิน</label>
						<select onchange="yesnoCheck(this);" class="form-control" name="cashmethod" required>
							<option value="">-วิธีชำระเงิน-</option>
							<option value="เงินสด">เงินสด</option>
							<option value="โอนเงิน">โอนเงิน</option>
						</select>
					</div>
                    
					<div class="form-group row" id="ifcash" style="display: none;">		 
							<label for="bank">เลือกธนาคารที่โอนเงิน</label>
							<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Banks" id="Banks" required>
                        <option value="" disabled selected hidden>เลือกธนาคารที่ท่านต้องการชำระเงิน</option>
                        <option value="131-1-00001-6">กรุงศรีอยุธยา</option>
                        <option value="023-1-9265-7">กรุงไทย</option>
                        <option value="011-2-25379-3">กสิการไทย</option>
                        <option value="152-0-00001-7">กรุงเทพ</option>
                        <option value="045-2-35809-1">ไทยพาณิชย์</option>
                        <option value="238-2-11007-6">ทีเอมบีธนาชาติ</option>
                    </select>
					</div>
					<div class="form-group row">
						<label for="amount">จำนวนเงิน</label>
						<input type="number" name="amount" required min="0" class="form-control">
					</div>
					<div class="form-group row">
						<button type="submit" class="btn btn-primary">SAVE</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		function yesnoCheck(that) {
				if (that.value == "โอนเงิน") {
					document.getElementById("ifcash").style.display = "block";
		} else {
					document.getElementById("ifcash").style.display = "none";
			}
		}
		</script>
		
	</body>
</html>