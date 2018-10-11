var app = angular.module("app",[]);

app.controller("listWeedController", function($scope){

  //mock data
  $scope.listWeed = [
    new WeedObj("Afpak","hybrid",["Earthy","Chemical","Pine"],"Relaxed"),
    new WeedObj("African","sativa",["Spicy","Herbal","Pungent","Earthy"],"Happy"),
    new WeedObj("Afternoon Delight","hybrid",["Pepper","Flowery","Pine"],"Hungry"),
    new WeedObj("Afwreck","hybrid",["Earthy","Flowery","Pine"],"Creative")
  ];


  function WeedObj(name,race,flavors,effects){
    this.name    = name;
    this.race    = race;
    this.flavors  = flavors;
    this.effects = effects;
    this.id      = null;
    this.points  = null;

    this.getAllFlavors = function(){
      //will return all the flavors in a string in this format: example, lorem, ipusm
      let flavors = "";
      const flavorLenght = this.flavors.length;
      for(let i = 0;i <flavorLenght;i++){
        flavors += i === 0 ? this.flavors[i] : ', ' + this.flavors[i];
      }
      return flavors;
    }
  }

});
