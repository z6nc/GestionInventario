
<section class="ContainerDashboard">
<?php
include 'GraficosDashboard.php'
?>
</section>

<style>
    .ContainerDashboard{
      background-color: whitesmoke;
      display: grid;
      grid-template-areas: 
      "GraficoA GraficoB "
      "GraficoC GraficoC"
      "GraficoD GraficoD ";
      grid-template-columns: 1fr 1fr ;
      grid-template-rows: 1fr 1fr 
      1fr 1fr ;
      overflow: hidden;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
