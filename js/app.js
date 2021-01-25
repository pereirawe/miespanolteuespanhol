angular.module('collagenelixir4uApp', [])
.controller('collagenelixir4uController', [
    '$scope','$http',
    function($scope,$http) {

        $scope.loading = true;

        $scope.getContent = function( lang = 'en' ){

            $scope.loading = true;
            
            $scope.content = [];
            $http({
                method: 'GET',
                url:'../json/'+ lang +'/content.json'
            }).then(function successCallback(response) {
                $scope.content = response.data
                $scope.loading = false
                
            }, function errorCallback(response) {
                return response
                console.log(error)
            });

        }

        $scope.changeLanguage = function(newLang){
            $scope.getContent(newLang)
        }

        var availableLangs = [ "en", "es", "pt" ]
        var lang = navigator.language || navigator.userLanguage;
        // lang = lang.substring(0,2)

        // if ( !availableLangs.includes(lang) ){
        //     lang = 'en';
        // }
        
        lang = 'en';

        $scope.getContent(lang)

}]);


function enableBtn(){
    document.getElementById("submitBtn").disabled = false;
}
  
$(function(){
    $('#contactForm').submit(function(e){
        e.preventDefault();
  
        var formData = $(this).serialize();
        var actionURL = $(this).attr('action');
  
        $.ajax({
          url: actionURL,
          method:"POST",
          data:formData,
          success:function(data){
          
            var message = '<div class="alert alert-success py-5" role="alert"><h3>Message was sent successfully!</h3></div>'
            $('#contactForm').html(message)
  
          },
          error:function(error){
            console.log(error);
            alert(error.status);
          }
        });
    });
});

$(function(){
    $('#orderForm').submit(function(e){
        e.preventDefault();
  
        var formData = $(this).serialize();
        var actionURL = $(this).attr('action');
  
        $.ajax({
          url: actionURL,
          method:"POST",
          data:formData,
          success:function(data){
          
            var message = '<div class="alert alert-success py-5" role="alert"><h3>Order was sent successfully!</h3></div>'
            $('#orderForm').html(message)
  
          },
          error:function(error){
            console.log(error);
            alert(error.status);
          }
        });
    });
});
  
