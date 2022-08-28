{
	init:function(){
		$('#unit-form-test').bridge('RocketTest/dataCollect').on('done',(e,response)=>{
			console.log('response');
			console.log(response);
		}).on('error',(e,error,error_code)=>{
			console.log('error: '+error+'>'+error_code);
		}).on('progress',function(e,progress){
			console.log('progress:'+progress);
		});
	}
}