
<?php include("Views/header.php"); ?>

<div class="container mainPage" ng-app="app" ng-controller="listWeedController">
  <h1>Grass Draft</h1>

  <h2>Top 100 Marijuana on the market</h2>

  <table>
    <tr>
      <th>Rank</th>
      <th>Points</th>
      <th>Name</th>
      <th>race</th>
      <th>flavor</th>
      <th>effects</th>
    </tr>
    <tr ng-repeat="weed in listWeed">
      <td>{{$index}}</td>
      <td>{{weed.points || 0}}</td>
      <td>{{weed.name}}</td>
      <td>{{weed.race}}</td>
      <td>{{weed.getAllFlavors()}}</td>
      <td>{{weed.effects}}</td>
    </tr>
  </table>
</div>

 <?php include("Views/footer.php"); ?>
