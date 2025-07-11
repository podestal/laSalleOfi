class Forms{

	set(){
		let tbl=this.tbl
		let url=document.getElementById('formSetContact').action;
		let form=document.getElementById('formSetContact');
		let datos=form.querySelectorAll('input,select,textarea');
		let inputs={};
		let loader = document.getElementById('loaderForm') 
        loader.style.display='block'


		for(const item of datos){
			let name=item.name;
			let value=item.value;
			inputs[name] = value;	
		}
		for (let prop in inputs) {
			if(prop=='txtPhone'){

			}else{
				let txtProp = prop.replace("hdn", "txt");
			  	let input = document.getElementById(txtProp)
			  	
		  		if(inputs[prop]=='' || inputs[prop].trim()==''){
				  	input.focus()
				  	if(mensaje){
						loader.style.display='none'
						mensaje.innerHTML='Falta completar: '+input.title;
						mensaje.style.color="red"
					}
				  	return false;
				}
		  	}
		}
		const datosSerializados=JSON.stringify(inputs);
		const request=new XMLHttpRequest();
		request.open('POST',url,true);
		request.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=UTF-8');
		request.send('datosSerializados='+datosSerializados);

		request.onload=function(){
			if (request.status>=200 && request.status<400) {
				let data=request.responseText;
				let registro=JSON.parse(data);
				let html=registro['mensaje']

				if(mensaje){
					mensaje.innerHTML=html;
				}

				setTimeout(function(){
					mensaje.innerHTML='';
				},7000);
				// toastr.success('Se registro correctamente el usuario');
				document.getElementById("formSetContact").reset();
				
				loader.style.display='none'
			} else {
				console.log(request.responseText);
				// toastr.error('No se pudo realizar el registro');
				mensaje.innerHTML='No se pudo realizar el registro';
				loader.style.display='none'
			}
			
		}
		request.onerror = function(){
			// toastr.error('Error de conexión en el servidor');
			mensaje.innerHTML='Error de conexión en el servidor';
			loader.style.display='none'
		}

	}
	set_work(mensaje){
		let tbl=this.tbl
		let url=document.getElementById('formSetWork').action;
		let form=document.getElementById('formSetWork');
		let datos=form.querySelectorAll('input,select,textarea');
		let inputs={};
		let loader = document.getElementById('loaderForm') 
        loader.style.display='block'

		let formData= new FormData(form);
		
		for(const item of datos){
			let name=item.name;
			let value=item.value;
			inputs[name] = value;	
		}
		for (let prop in inputs) {
			if(prop=='txtPhoneWork' || prop=='txtEspecialtyWork' || prop=='txtCourseWork' || prop=='txtDescriptionWork'){

			}else{
				let txtProp = prop.replace("hdn", "txt");
			  	let input = document.getElementById(txtProp)
			  	
		  		if(inputs[prop]=='' || inputs[prop].trim()==''){
			  	input.focus()
			  	if(mensaje){
					loader.style.display='none'
					mensaje.innerHTML='Falta completar: '+input.title;
					mensaje.style.color="red"
				}
			  	return false;
			}

		  }
		}
		const request=new XMLHttpRequest();
		request.open('POST',url,true);
		request.send(formData);

		request.onload=function(){
			if (request.status>=200 && request.status<400) {
				let data=request.responseText;
				// console.log(data)
				let registro=JSON.parse(data);
				let html=registro['mensaje']

				if(mensaje){
					mensaje.innerHTML=html;
				}
				setTimeout(function(){
					mensaje.innerHTML='';
				},7000);
				// toastr.success('Se registro correctamente el usuario');
				document.getElementById("formSetWork").reset();
				loader.style.display='none'
			} else {
				mensaje.innerHTML='No se pudo realizar el registro';
				loader.style.display='none'
			}
			
		}
		request.onerror = function(){
			mensaje.innerHTML='Error de conexión en el servidor';
			loader.style.display='none'
		}
	}
}
document.addEventListener('DOMContentLoaded',()=>{
	if(document.getElementById('btnSetContact')){
		let btnSetContact = document.getElementById('btnSetContact');
		btnSetContact.addEventListener('click',(e)=>{
			e.preventDefault();
			let mensaje=document.getElementById('mensaje');
			let setContact = new Forms();
			setContact.set(mensaje);
		})
	}
	if(document.getElementById('btnSetWork')){
		let btnSetWork = document.getElementById('btnSetWork');
		btnSetWork.addEventListener('click',(e)=>{
			e.preventDefault();
			let mensaje=document.getElementById('mensaje');

			let setWork = new Forms();
			setWork.set_work(mensaje);
		})
	}
})