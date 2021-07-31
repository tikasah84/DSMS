function fill(bar) {
  var qty = document.getElementById("qty_" + bar).value;

  if (qty <= 0) {
    alert("Quantity cannot be less than 0");
    qty = 1;
  }
  var rate = document.getElementById("rate_" + bar).value;
  document.getElementById("amt_" + bar).value = qty * rate;
  var amt = document.getElementById("amt_" + bar).value;
  document.getElementById("total_" + bar).value = amt;
  var total = amt;
}

function update(bar) {
  var qty = document.getElementById("qty_" + bar).value;
  var rate = document.getElementById("rate_" + bar).value;
  var stock = document.getElementById("stock_" + bar).value;
  var cid = document.getElementById("cid").value;
  var amt = rate * qty;

  var total = amt;
  stock = stock - qty;

  if (qty > 0) {
    jQuery.ajax({
      url: "./update.php",
      type: "post",
      data:
        "&id=" +
        bar +
        "&qty=" +
        qty +
        "&rate=" +
        rate +
        "&stock=" +
        stock +
        "&amt=" +
        amt +
        "&cid=" +
        cid +
        "&total=" +
        total,
      success: function (result) {
        if (result) {
          // console.log(result);
          window.location.href =
            "http://localhost/Minor/Receptionist/billing.php";
          // if (window.history.replaceState) {
          //   window.history.replaceState(null, null, window.location.href);
          // }
        }
        // console.log(result);
      },
    });
  }
}

function printbill(name, amt) {
  var cid = document.getElementById("cid").value;
  var dis = document.getElementById("tdis").value;
  console.log(amt, dis);
  var tamt = amt - dis;
  var bar = 1;

  jQuery.ajax({
    url: "./print.php",
    type: "post",
    data:
      "&dis=" +
      dis +
      "&cid=" +
      cid +
      "&id=" +
      bar +
      "&name=" +
      name +
      "&amt=" +
      tamt,
    success: function (result) {
      console.log(result);
      if (result) {
        //console.log(result);
        window.open(result);
        location.reload();
      }
    },
  });
}

function dis(total) {
  var cid = document.getElementById("cid").value;
  jQuery.ajax({
    url: "./dis.php",
    type: "post",
    data: "&total=" + total + "&cid=" + cid,
    success: function (result) {
      console.log(result);
      if (result) {
        document.getElementById("tdis").value = result;
        document.getElementById("gamt").value = total - result;

        //console.log(result);
        // window.open(result);
        // location.reload();
      }
    },
  });
}
