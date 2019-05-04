/*
* Country Functions
*/

// Country List View
if(module=="COUNTRIES")
{
	$(".notification").text("Total Record(s) :"+totalList);
	$(".select_page").html("<option disabled>Select Pages</option>");
    for(var i=0;i<(totalList/limit);i++){
    	var page=i+1;
    	var l=i*limit;
		$(".select_page").append("<option value='"+l+"'>"+page+"</option>");
	}

	// Country Add/Update
	function edit_item(id){
		var data={"id":id,'type':'edit'};
	    $.ajax({
	        url:BASEURL+"hh/countries/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Update Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	}
	
	// Country Save
	$(".save_items").click(function(){
	    var valid=true;
	    $(".required").each(function(){
	        if($(this).val()=="" || $(this).val()==null)
	        {
	            valid=false;
	            return 0;
	        }
	            
	    });
	    if(valid)
	    {
	        var data={
	            "id":$(".idforupdata").val(),
	            "type":"save",
	            "countryname":$(".country-name").val(),
	        };
	        $.ajax({
	        	url:BASEURL+"hh/countries/",
	            type:'POST',
	            data:data,
	            dataType:"html",
	            success:function(response){
	                if(response=="OK"){
	                    if($(".idforupdata").val()=="0")
	                        $(".notification").html("<span style='color: #48b54a;'>Record Inserted Successfully.<span>")
	                    else
	                        $(".notification").html("<span style='color: #48b54a;'>Record Updated Successfully.<span>")
	                	
	                	setTimeout(function(){
	                		$(".cancel_items").trigger('click');
	                	},1000)
	                }
	                else if(response=="FAIL"){
	                    $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	                }
	            }
	        });
	    }
	    else{
	        $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	    }
	});

	$(".cancel_items").click(function(){
		window.location.href=BASEURL+"hh/countries";
	});
	
	$(".create_item").click(function(){
		var id= "0";
		var data={"id":id,'type':'add'};
	    $.ajax({
	        url:BASEURL+"hh/countries/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Add New Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	});
	$(".select_page").change(function(){
		var l=$(this).val();
		var data={"page":l,'type':'page'};
	    $.ajax({
	        url:BASEURL+"hh/countries/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	            	$(".search-text").val('');
	               	$(".load_content").html(response);
	            }
	    });
	});
	$(".search-item").click(function(){
		var searchText=$(".search-text").val();
		var data={"text":searchText,'type':'search'};
	    $.ajax({
	        url:BASEURL+"hh/countries/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	            }
	    });
	});
}

/*
* State Functions
*/

// State List View
if(module=="STATES")
{
	$(".notification").text("Total Record(s) :"+totalList);
	$(".select_page").html("<option disabled>Select Pages</option>");
    for(var i=0;i<(totalList/limit);i++){
    	var page=i+1;
    	var l=i*limit;
		$(".select_page").append("<option value='"+l+"'>"+page+"</option>");
	}

	// State Add/Update
	function edit_item(id){
		var data={"id":id,'type':'edit'};
	    $.ajax({
	        url:BASEURL+"hh/states/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Update Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	}
	
	// State Save
	$(".save_items").click(function(){
	    var valid=true;
	    $(".required").each(function(){
	        if($(this).val()=="" || $(this).val()==null)
	        {
	            valid=false;
	            return 0;
	        }
	            
	    });
	    if(valid)
	    {
	        var data={
	            "id":$(".idforupdata").val(),
	            "type":"save",
	            "statename":$(".state-name").val(),
	            "countryname":$(".country-name").val(),
	        };
	        $.ajax({
	        	url:BASEURL+"hh/states/",
	            type:'POST',
	            data:data,
	            dataType:"html",
	            success:function(response){
	                if(response=="OK"){
	                    if($(".idforupdata").val()=="0")
	                        $(".notification").html("<span style='color: #48b54a;'>Record Inserted Successfully.<span>")
	                    else
	                        $(".notification").html("<span style='color: #48b54a;'>Record Updated Successfully.<span>")
	                	
	                	setTimeout(function(){
	                		$(".cancel_items").trigger('click');
	                	},1000)
	                }
	                else if(response=="FAIL"){
	                    $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	                }
	            }
	        });
	    }
	    else{
	        $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	    }
	});

	$(".cancel_items").click(function(){
		window.location.href=BASEURL+"hh/states";
	});
	
	$(".create_item").click(function(){
		var id= "0";
		var data={"id":id,'type':'add'};
	    $.ajax({
	        url:BASEURL+"hh/states/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Add New Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	});
	$(".select_page").change(function(){
		var l=$(this).val();
		var data={"page":l,'type':'page'};
	    $.ajax({
	        url:BASEURL+"hh/states/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	            	$(".search-text").val('');
	               	$(".load_content").html(response);
	            }
	    });
	});
	$(".search-item").click(function(){
		var searchText=$(".search-text").val();
		var data={"text":searchText,'type':'search'};
	    $.ajax({
	        url:BASEURL+"hh/states/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	            }
	    });
	});
}
/*
* Cities Functions
*/

// Cities List View
if(module=="CITIES")
{
	$(".notification").text("Total Record(s) :"+totalList);
	$(".select_page").html("<option disabled>Select Pages</option>");
    for(var i=0;i<(totalList/limit);i++){
    	var page=i+1;
    	var l=i*limit;
		$(".select_page").append("<option value='"+l+"'>"+page+"</option>");
	}

	// City Add/Update 
	function edit_item(id){
		var data={"id":id,'type':'edit'};
	    $.ajax({
	        url:BASEURL+"hh/cities/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Update Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	}

	// City Save
	$(".save_items").click(function(){
	    var valid=true;
	    $(".required").each(function(){
	        if($(this).val()=="" || $(this).val()==null)
	        {
	            valid=false;
	            return 0;
	        }
	            
	    });
	    if(valid)
	    {
	        var data={
	            "id":$(".idforupdata").val(),
	            "type":"save",
	            "cityname":$(".city-name").val(),
	            "statename":$(".state-name").val(),
	            "countryname":$(".country-name").val(),
	            "locality":$(".locality").val(),
	            "topcity":$(".top-city").val(),
	        };
	        $.ajax({
	        	url:BASEURL+"hh/cities/",
	            type:'POST',
	            data:data,
	            dataType:"html",
	            success:function(response){
	                if(response=="OK"){
	                    if($(".idforupdata").val()=="0")
	                        $(".notification").html("<span style='color: #48b54a;'>Record Inserted Successfully.<span>")
	                    else
	                        $(".notification").html("<span style='color: #48b54a;'>Record Updated Successfully.<span>")
	                	
	                	setTimeout(function(){
	                		$(".cancel_items").trigger('click');
	                	},1000)
	                }
	                else if(response=="FAIL"){
	                    $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	                }
	            }
	        });
	    }
	    else{
	        $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	    }
	});

	$(".cancel_items").click(function(){
		window.location.href=BASEURL+"hh/cities";
	});
	
	$(".create_item").click(function(){
		var id= "0";
		var data={"id":id,'type':'add'};
	    $.ajax({
	        url:BASEURL+"hh/cities/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Add New Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	});
	$(".select_page").change(function(){
		var l=$(this).val();
		var data={"page":l,'type':'page'};
	    $.ajax({
	        url:BASEURL+"hh/cities/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	            	$(".search-text").val('');
	               	$(".load_content").html(response);
	            }
	    });
	});
	$(".search-item").click(function(){
		var searchText=$(".search-text").val();
		var data={"text":searchText,'type':'search'};
	    $.ajax({
	        url:BASEURL+"hh/cities/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	            }
	    });
	});
	function locality(id){
		var locality=0;
		if($(".locality-btn-"+id).hasClass("btn-success")){
			
			$(".locality-btn-"+id).removeClass('btn-success');
			$(".locality-btn-"+id).addClass('btn-danger');
			locality=0;
		}
		else{
			
			$(".locality-btn-"+id).addClass('btn-success');
			$(".locality-btn-"+id).removeClass('btn-danger');
			locality=1;
		}

		var data={'id':id,"locality":locality,'type':'locality'};
	    $.ajax({
	        url:BASEURL+"hh/cities/",
	            type:'POST',
	            data:data
	    });
		
	}
	function top_city(id){
		var top=0;
		if($(".top-"+id).hasClass("ti-check")){
			$(".top-"+id).removeClass('ti-check');
			$(".top-"+id).addClass('ti-close');

			$(".top-btn-"+id).removeClass('btn-success');
			$(".top-btn-"+id).addClass('btn-danger');
			top=0;
		}
		else{
			$(".top-"+id).addClass('ti-check');
			$(".top-"+id).removeClass('ti-close');

			$(".top-btn-"+id).addClass('btn-success');
			$(".top-btn-"+id).removeClass('btn-danger');
			top=1;
		}

		var data={'id':id,"top":top,'type':'top'};
	    $.ajax({
	        url:BASEURL+"hh/cities/",
	            type:'POST',
	            data:data
	    });
		
	}
}
/*
* Categories Functions
*/

// Categories List View
if(module=="CATEGORIES")
{
	$(".notification").text("Total Record(s) :"+totalList);
	$(".select_page").html("<option disabled>Select Pages</option>");
    for(var i=0;i<(totalList/limit);i++){
    	var page=i+1;
    	var l=i*limit;
		$(".select_page").append("<option value='"+l+"'>"+page+"</option>");
	}

	// City Add/Update 
	function edit_item(id){
		var data={"id":id,'type':'edit'};
	    $.ajax({
	        url:BASEURL+"hh/categories/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Update Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	}

	// City Save
	$(".save_items").click(function(){
	    var valid=true;
	    $(".required").each(function(){
	        if($(this).val()=="" || $(this).val()==null)
	        {
	            valid=false;
	            return 0;
	        }
	            
	    });
	    if(valid)
	    {
	        var data={
	            "id":$(".idforupdata").val(),
	            "type":"save",
	            "categoryname":$(".category-name").val(),
	            "profiletype":$(".profile-type").val(),
	            "slug":$(".slug").val(),
	            "profileno":$(".profile-no").val(),
	            "girlprofileno":$(".girl-profile-no").val(),
	            "guyprofileno":$(".guy-profile-no").val(),
	        };
	        $.ajax({
	        	url:BASEURL+"hh/categories/",
	            type:'POST',
	            data:data,
	            dataType:"html",
	            success:function(response){
	                if(response=="OK"){
	                    if($(".idforupdata").val()=="0")
	                        $(".notification").html("<span style='color: #48b54a;'>Record Inserted Successfully.<span>")
	                    else
	                        $(".notification").html("<span style='color: #48b54a;'>Record Updated Successfully.<span>")
	                	
	                	setTimeout(function(){
	                		$(".cancel_items").trigger('click');
	                	},1000)
	                }
	                else if(response=="FAIL"){
	                    $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	                }
	            }
	        });
	    }
	    else{
	        $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	    }
	});

	$(".cancel_items").click(function(){
		window.location.href=BASEURL+"hh/categories";
	});
	
	$(".create_item").click(function(){
		var id= "0";
		var data={"id":id,'type':'add'};
	    $.ajax({
	        url:BASEURL+"hh/categories/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Add New Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	});
	$(".select_page").change(function(){
		var l=$(this).val();
		var data={"page":l,'type':'page'};
	    $.ajax({
	        url:BASEURL+"hh/categories/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	            	$(".search-text").val('');
	               	$(".load_content").html(response);
	            }
	    });
	});
	$(".search-item").click(function(){
		var searchText=$(".search-text").val();
		var data={"text":searchText,'type':'search'};
	    $.ajax({
	        url:BASEURL+"hh/categories/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	            }
	    });
	});
}
/*
* SEO Functions
*/

// SEO List View
if(module=="SEO")
{
	$(".notification").text("Total Record(s) :"+totalList);
	$(".select_page").html("<option disabled>Select Pages</option>");
    for(var i=0;i<(totalList/limit);i++){
    	var page=i+1;
    	var l=i*limit;
		$(".select_page").append("<option value='"+l+"'>"+page+"</option>");
	}

	// SEO Add/Update 
	function edit_item(id){
		var data={"id":id,'type':'edit'};
	    $.ajax({
	        url:BASEURL+"hh/seo/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Update Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	}

	// SEO Save
	$(".save_items").click(function(){
	    var valid=true;
	    $(".required").each(function(){
	        if($(this).val()=="" || $(this).val()==null)
	        {
	            valid=false;
	            return 0;
	        }
	            
	    });
	    if(valid)
	    {
	        var data={
	            "id":$(".idforupdata").val(),
	            "type":"save",
	            "seotype":$(".seotype").val(),
	            "title":$(".seotitle").val(),
	            "description":$(".description").val(),
	            "keyword":$(".keyword").val(),
	            "con1":$(".con1").val(),
	            "con2":$(".con2").val(),
	            "con3":$(".con3").val(),
	            "con4":$(".con4").val(),
	            "con5":$(".con5").val(),
	            "con6":$(".con6").val(),
	            "header1":$(".header1").val(),
	            "header2":$(".header2").val(),
	            "header3":$(".header3").val(),
	            "header4":$(".header4").val(),
	            "header5":$(".header5").val(),
	            "header6":$(".header6").val(),
	        };
	        $.ajax({
	        	url:BASEURL+"hh/seo/",
	            type:'POST',
	            data:data,
	            dataType:"html",
	            success:function(response){
	                if(response=="OK"){
	                    if($(".idforupdata").val()=="0")
	                        $(".notification").html("<span style='color: #48b54a;'>Record Inserted Successfully.<span>")
	                    else
	                        $(".notification").html("<span style='color: #48b54a;'>Record Updated Successfully.<span>")
	                	
	                	setTimeout(function(){
	                		$(".cancel_items").trigger('click');
	                	},1000)
	                }
	                else if(response=="FAIL"){
	                    $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	                }
	            }
	        });
	    }
	    else{
	        $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	    }
	});

	$(".cancel_items").click(function(){
		window.location.href=BASEURL+"hh/seo";
	});
	
	$(".create_item").click(function(){
		var id= "0";
		var data={"id":id,'type':'add'};
	    $.ajax({
	        url:BASEURL+"hh/seo/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Add New Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	});
	$(".select_page").change(function(){
		var l=$(this).val();
		var data={"page":l,'type':'page'};
	    $.ajax({
	        url:BASEURL+"hh/seo/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	            	$(".search-text").val('');
	               	$(".load_content").html(response);
	            }
	    });
	});
	$(".search-item").click(function(){
		var searchText=$(".search-text").val();
		var data={"text":searchText,'type':'search'};
	    $.ajax({
	        url:BASEURL+"hh/seo/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	            }
	    });
	});
}
/*
* GENERIC Functions
*/

// GENERIC List View
if(module=="GENERIC")
{
	$(".notification").text("Total Record(s) :"+totalList);
	$(".select_page").html("<option disabled>Select Pages</option>");
    for(var i=0;i<(totalList/limit);i++){
    	var page=i+1;
    	var l=i*limit;
		$(".select_page").append("<option value='"+l+"'>"+page+"</option>");
	}

	// GENERIC Add/Update 
	function edit_item(id){
		var data={"id":id,'type':'edit'};
	    $.ajax({
	        url:BASEURL+"hh/generic/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Update Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	}

	// GENERIC Save
	$(".save_items").click(function(){
	    var valid=true;
	    $(".required").each(function(){
	        if($(this).val()=="" || $(this).val()==null)
	        {
	            valid=false;
	            return 0;
	        }
	            
	    });
	    if(valid)
	    {
	        var data={
	            "id":$(".idforupdata").val(),
	            "type":"save",
	            "name":$(".genericname").val(),
	            "title":$(".generictitle").val(),
	            "slug":$(".slug").val(),
	            "description":$(".description").val(),
	            "body":$(".genericbody").val(),
	        };
	        $.ajax({
	        	url:BASEURL+"hh/generic/",
	            type:'POST',
	            data:data,
	            dataType:"html",
	            success:function(response){
	                if(response=="OK"){
	                    if($(".idforupdata").val()=="0")
	                        $(".notification").html("<span style='color: #48b54a;'>Record Inserted Successfully.<span>")
	                    else
	                        $(".notification").html("<span style='color: #48b54a;'>Record Updated Successfully.<span>")
	                	
	                	setTimeout(function(){
	                		$(".cancel_items").trigger('click');
	                	},1000)
	                }
	                else if(response=="FAIL"){
	                    $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	                }
	            }
	        });
	    }
	    else{
	        $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	    }
	});

	$(".cancel_items").click(function(){
		window.location.href=BASEURL+"hh/generic";
	});
	
	$(".create_item").click(function(){
		var id= "0";
		var data={"id":id,'type':'add'};
	    $.ajax({
	        url:BASEURL+"hh/generic/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	               $(".title-item").text("Add New Record");
	               $(".notification").text('');
	               $(".search-input-text").hide();
	               $(".select_page").hide();
	               $(".create_item").hide();
	               $(".cancel_items").show();
	               $(".save_items").show();
	            }
	    });
	});
	$(".select_page").change(function(){
		var l=$(this).val();
		var data={"page":l,'type':'page'};
	    $.ajax({
	        url:BASEURL+"hh/generic/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	            	$(".search-text").val('');
	               	$(".load_content").html(response);
	            }
	    });
	});
	$(".search-item").click(function(){
		var searchText=$(".search-text").val();
		var data={"text":searchText,'type':'search'};
	    $.ajax({
	        url:BASEURL+"hh/generic/",
	            type:'POST',
	            data:data,
	            dataType:'html',
	            success:function(response){
	               $(".load_content").html(response);
	            }
	    });
	});
}

/*
* Login
*/
if(module=="LOGIN"){
	$(".login").click(function(){
	    var valid=true;
	    $(".required").each(function(){
	        if($(this).val()=="" || $(this).val()==null)
	        {
	            valid=false;
	            return 0;
	        }
	            
	    });
	    if(valid)
	    {
	        // acconttype 	: huy87@43thgh
	        // username 	: kgh9578@tghj
	        // password		: 8h54jhgjh@7$
	        var data={
	            "huy87@43thgh":$(".acconttype").val(),
	            "kgh9578@tghj":$(".username").val(),
	            "8h54jhgjh@7$":$(".password").val(),
	        };
	        $.ajax({
	        	url:BASEURL+"hh/login/",
	            type:'POST',
	            data:data,
	            dataType:"html",
	            success:function(response){
	                if(response=="OK"){
	                   window.location.href=BASEURL+"hh/dashboard"; 
	                }
	                else if(response=="FAIL"){
	                    $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	                }
	            }
	        });
	    }
	    else{
	        $(".notification").html("<span style='color: #da1713;'>* Please Enter Required Fields.<span></span></span>")
	    }
	});
}
else{

}