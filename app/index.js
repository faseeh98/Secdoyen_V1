var app = angular.module('indexApp', []);

app.controller('bodyCtrl', ['$scope', '$http', function($scope, $http) {
  $scope.navbar_header = "Secdoyen";
  $scope.homepage_title = "Secdoyen";
  $scope.aboutus_paragraph = "SecDoyen Inc. is a Cyber Security services firm with the objective of helping organizations to safeguard their business assets and data. We defend, protect and assure your IT infrastructure and applications from damaging and costly security risks, ensuring the integrity of your organization is maintained. Our team is comprised of seasoned consultants with years of experience in diversified industry sectors, and successfully delivering security services and solutions to reputable companies. We believe in integrating people, knowledge, process, and technology to provide a comprehensive security solution or roadmap for all industry sectors";
  $scope.certifications_title = "Certifications";
  $scope.author = {
    fullname: "Faseeh Ahmed",
    biography: undefined,
    contact: {}
  };
  $scope.solution = {};
  $scope.contact = {};
  $scope.service = {};

}]);
