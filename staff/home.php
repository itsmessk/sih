<h1 class="text-dark">Welcome to
  <?php echo $_settings->info('name') ?>
</h1>
<hr class="border-dark">
<div class="row">
  <div class="col-4 col-sm-4 col-md-4">
    <div class="card card-primary">
      <div class="card-header">
        <h5 class="card-title">Total Suppliers</h5>
      </div>
      <div class="card-body">
        <canvas id="supplierChart" width="200" height="200"></canvas>
      </div>
    </div>
  </div>
  <div class="col-4 col-sm-4 col-md-4">
    <div class="card card-success">
      <div class="card-header">
        <h5 class="card-title">Total Items</h5>
      </div>
      <div class="card-body">
        <canvas id="itemChart" width="200" height="200"></canvas>
      </div>
    </div>
  </div>
  <div class="col-4 col-sm-4 col-md-4">
    <div class="card card-primary">
      <div class="card-header">
        <h5 class="card-title">Total Procuremnt</h5>
      </div>
      <div class="card-body">
        <canvas id="myChart" width="200" height="200"></canvas>
      </div>
    </div>
  </div>
  
</div>
<?php
// Assuming you have already established a database connection using $conn

// Fetch data for Suppliers
$supplierQuery = $conn->query("SELECT * FROM supplier_list");
$supplierCount = $supplierQuery->num_rows;

// Fetch data for Items
$itemQuery = $conn->query("SELECT * FROM item_list where status =1");
$itemCount = $itemQuery->num_rows;

$poQuery = $conn->query("SELECT * FROM po_list");
$poCount = $poQuery->num_rows;

// Total Suppliers and Items (You should have these values defined)
$totalSuppliers = 8; // Replace with your actual total supplier count
$totalItems = 5;
$totalpo = 7; // Replace with your actual total item count
?>

<script>
  // Data for pie charts
  var supplierData = {
    labels: ['Suppliers', 'Remaining'],
    datasets: [{
      data: [<?php echo $supplierCount; ?>, <?php echo $totalSuppliers - $supplierCount; ?>],
      backgroundColor: ['rgba(0, 123, 255, 0.8)', 'rgba(200, 200, 200, 0.8)'],
    }],
  };
  var poData = {
    labels: ['PurchaseOrders', 'Remaining'],
    datasets: [{
      data: [<?php echo $poCount; ?>, <?php echo $totalpo - $poCount; ?>],
      backgroundColor: ['rgba(0, 123, 255, 0.8)', 'rgba(200, 200, 200, 0.8)'],
    }],
  };

  var itemData = {
    labels: ['Active Items', 'Inactive Items'],
    datasets: [{
      data: [<?php echo $itemCount; ?>, <?php echo $totalItems - $itemCount; ?>],
      backgroundColor: ['rgba(40, 167, 69, 0.8)', 'rgba(200, 200, 200, 0.8)'],
    }],
  };

  // Create pie charts
  var supplierChart = new Chart(document.getElementById('supplierChart'), {
    type: 'pie',
    data: supplierData,
  });

  var itemChart = new Chart(document.getElementById('itemChart'), {
    type: 'bar',
    data: itemData,
  });

  var poChart = new Chart(document.getElementById('poChart'), {
    type: 'pie',
    data: poData, 
  });
</script>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>