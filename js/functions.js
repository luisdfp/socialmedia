  function submitResults(resultObject, callback){
    var posting = $.post('controllers/store_result.php', resultObject);

    posting.done(function(response){
      var data = JSON.parse(response);
      if(data.status == 'success'){
        console.log(data);

        alert(data.msg);
        callback();
      }else if(data.status == 'error'){
        console.log(data);

        alert(data.msg);
      }    
      
    });
    
    posting.fail(httpFailureHandler);
  }

  function redirectToSurvey(){
    location.href = 'redirect.php'; 
  }

  function httpFailureHandler(x,e) {
    if (x.status==0) {
        alert('You are offline!!\n Please Check Your Network.');
    } else if(x.status==404) {
        alert('Requested URL not found.');
    } else if(x.status==500) {
        alert('Internel Server Error.');
    } else if(e=='parsererror') {
        alert('Error.\nParsing JSON Request failed.');
    } else if(e=='timeout'){
        alert('Request Time out.');
    } else {
        alert('Unknow Error.\n'+x.responseText);
    }
  }