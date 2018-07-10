	function getRandomArbitrary(min, max) {
		return Math.random() * (max - min) + min;
	}
	function getRandomInt(min, max) {
		return Math.floor(Math.random() * (max - min)) + min;
	}
	function getRandomText(count)
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < count; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
	//Activation  8754542930
	function activationCheck(){
		var lw = lawBook.getdata();
		//lawBook.setdata(activation);
		console.log("==>"+typeof JSON.stringify(lw.activation_status));
		if (typeof JSON.stringify(lw.activation_status) !== "undefined") {
			console.log("==> defined");
			if(JSON.stringify(lw.activation_status) == 1){
				return 1;
			}else{
				return 0;
			}
		}else{
			console.log("==>- not defined");
			return 0;
		}
		
	}
	
	function ValidateCode(){
		var strEnteredCode = $("#activation_code").val();
		console.log("-"+strEnteredCode);	
		if(strEnteredCode.length == 0){
			alert("Please enter the correct activation code");
		}else{
			var lw = lawBook.getdata();
			console.log("--"+JSON.stringify(lw.activation_code));
			if (typeof JSON.stringify(lw.activation_code) == "undefined") {
				alert("Please resend the activation code request");
			}else{
				lStrActivationCode = lw.activation_code.substring(0,2).trim() + lw.activation_code.substring(lw.activation_code.length-2,lw.activation_code.length).trim();
				console.log(lStrActivationCode);
				if(strEnteredCode.toLowerCase() == lStrActivationCode.toLowerCase()){
					// SUC 
					lw.activation_status = 1;
					lawBook.setdata(lw);
					alert("Your activation code has been activated successfully... \nWelcome to Law Mobile Library.");
					$.mobile.changePage('#homepg', { transition: "none"} );
					return true;
				}else{
					alert("Please enter the correct activation code");
					return false;
					lw.activation_status = 0;
					lawBook.setdata(lw);
				}
			}
		}
	}
	
	function getActivationCode(){
		var lw = lawBook.getdata();
		var rand_tx =getRandomText(10);
		console.log(rand_tx);
		var encrypted = CryptoJS.AES.encrypt(rand_tx, "Mobilelawapp");
		
		
		

	
	//var encrypted = CryptoJS.AES.encrypt("Message", "Secret Passphrase")
	 var enc_text = encrypted+"";
		//console.log("dad->"+enc_text.substring(11,enc_text.length-1));
	 var activation_cd = enc_text.substring(11,enc_text.length-1);
		lw.activation_code = activation_cd;
		lawBook.setdata(lw);
		//console.log(lw);
		//window.location = "sms:8754542930?body="+activation_cd;
		sendSMS(activation_cd);
	}
	
	function sendSMS(msgContent){
			var number = "8754542930";
            var message = msgContent;
            var intent = "INTENT"; //leave empty for sending sms using default intent
            var success = function () { alert('Activate code request sent successfully'); };
            var error = function (e) { alert('Problem sending:' + e); };
            sms.send(number, message, intent, success, error);
	}
function redirectPage(pageID) {
  $.mobile.changePage(
    pageID,
    {
      allowSamePageTransition : true,
      transition              : 'none',
      showLoadMsg             : false,
      reloadPage              : false
    }
  );
}

	

// ACT LIST BY ALPHABET
function listbyalphabet(jsondata){
	for(objparam in jsondata){
		var mnu = jsondata[objparam];
		var html = "";
		var actaList = $( "#actbyalp_list" );
		actaList.empty();
		for(i in mnu){
			console.log(mnu[i].id+"-->"+mnu[i].title);
			html+='<li><a href="#searchin" onClick="setactInfo('+mnu[i].id+');" data-transition="none">'+mnu[i].title+'</a></li>';
		}
		actaList.append(html);
		actaList.listview( "refresh" );
   	}
}

// LIST BY SECTION 
function listbySection(sjsondata){
	
	var lw = lawBook.getdata();
	var acstList = $( "#actbysection_list" );
	var html = "";
	
	//console.log(JSON.stringify(lw));
	//console.log("actionname ->"+lw.actindex[lw.currentact_id].title);
	acstList.empty();
	for(sobjparam in sjsondata.section){
				//console.log("-->"+sjsondata.section);
		var sec = sjsondata.section[sobjparam];
		//alert(sec[1].section_id);
		var i = 0;
    		for(;i < sec.length; i++){
				var from = 1; //LIST
				var section_id = sec[i].section_id;
				var next_section_id = (sec[i+1] !== undefined ? sec[i+1].section_id : -1);
				var prev_section_id = (sec[i-1] !== undefined ? sec[i-1].section_id : -1);
				html+='<li><a id="'+section_id+'_li" href="#actinfo" onClick="getsectionInfo(\''+section_id+'\','+from+',\''+next_section_id+'\',\''+prev_section_id+'\');" data-transition="none">'+sec[i].title+'</a></li>';
			}
	}
	acstList.append(html);
	acstList.listview( "refresh" );
}

// LIST BY CHAPTER 
function listbychapter(){
	
	var lw = lawBook.getdata();
	var acstList = $( "#actchapter_list" );
	acstList.empty();
	var html = '<li data-role="list-divider">'+getCurrentActionTItle();+'</li>';
	
	console.log(JSON.stringify(lw.action_info.chapter));
	
	for(objparam in lw.action_info.chapter){
    		var chapter = lw.action_info.chapter[objparam];
    		for(i in chapter){
    			console.log(objparam+"-->"+chapter[i].title);
				html+='<li><a href="#" onclick="listActbychapter('+ objparam +')"><h2 style="color:#0A4D90"> '+chapter[i].heading+'</h2>'+chapter[i].title+'<p> Sec. '+chapter[i].sectionstart+' - '+chapter[i].sectionend+'</p><p class="ui-li-aside"><strong></strong></p></a></li>';
			}
    }
	acstList.append(html);
	acstList.listview( "refresh" );
}


// LIST ACTION ID BY CHAPTER
function listActbychapter(chap_id){
	$.mobile.changePage('#actinfobychapter', { transition: "none"} );
	var lw = lawBook.getdata();
	//console.log("===>"+JSON.stringify(lw.action_info.section[chap_id]));
	var html = "";
	
	for(cobjparam in lw.action_info.section[chap_id]){
		//console.log("-->"+sjsondata.section);
		var sec = lw.action_info.section[chap_id][cobjparam];
    		//console.log("dadd"+JSON.stringify(sec));
		console.log("--->"+sec.title); // GET THE CONTENT FOR THE SECT
		//html += '<p id="secpg_title"><strong>'+sec.section_id+'. '+sec.title+'</strong></p><p id="secpg_content">'+sec.content+'</p>';
		html += '<p id="secpg_title" style="color:#FF0000" ><strong>'+sec.title+'</strong></p><p id="secpg_content">'+sec.content+'</p>';
		
	}
	$("#actlist_bychapter").html(html);
	$("#secpg_title").css({ 'font-weight': 'bold', 'font-size': '120%' });
	
}


//SEARCH BY WORD ACTNAME
function getActBysearchword(){
console.log("---Now-->");
 var lw = lawBook.getdata();
 var searchword =$('#search-act-byword').val();
 $("#search_message").html("");
 //alert(searchword);
 //console.log(lw);
 
	var html = "";
	var actaList = $( "#actbysearcword_list" );
	actaList.empty();
		
 var rescount = 0; 
 for(objparam in lw){
  var act = lw[objparam];
  
  for(i in act){
   //console.log(act[i].id+"-->"+act[i].title);
   if (act[i].title.search(new RegExp(searchword)) != -1) {
            console.log(act[i].title);
			rescount = rescount +1;
            html+='<li><a href="#searchin" onClick="setactInfo('+act[i].id+');" data-transition="none">'+act[i].title+'</a></li>';
   }
  }
 }
	if(rescount < 1){
		$("#search_message").html("Sorry no result found");
	}
	actaList.append(html);
	actaList.listview( "refresh" );
 
 $("#actbysearcword_list").highlight(searchword);
 
 }

 //SEARCH BY WORD SECTION WORD
 function getSectionBysearchword(){
	var lw = lawBook.getdata();
	var searchword =$('#search-section-byword').val();
	$("#sec_search_message").html("");
	//alert(searchword);
 //console.log(lw);
	var html = "";
	var actaList = $( "#section_searcword_list" );
	actaList.empty();
	 var rescount = 0;
	var secobj = lw.action_info.section;
	
  for(sobjparam in secobj){
   var sec = secobj[sobjparam];
   for(i in sec){
    //console.log("--->"+sec[i].section_id+"---"+sec[i].title);
    // DAM NEED TO CHECK OBJ PRESENT
    
    if(sec[i].hasOwnProperty('section_id')){
     //console.log("ALL SEC TIT-->"+sec[i].section_id+". "+sec[i].title);
      if (sec[i].title.search(new RegExp(searchword)) != -1) {
      // console.log(" ANS-->"+sec[i].section_id+". "+sec[i].title);
	   rescount = rescount +1;
	   var from = 0;//search
	   html+='<li><a href="#searchresult" onClick="getsectionInfo('+sec[i].section_id+','+from+');" data-transition="none">'+sec[i].title+'</a></li>';
			
	   
       
      }
    }
   }
   

  }
  
  if(lw.currentact_id ==  53){
		//console.log("FORMDATA----->"+JSON.stringify(lawBook.getdata()));
		var frmobj = lw.action_info.formdata;
		
		for(frmkey in frmobj){
			
			console.log("--->:"+frmkey+"===>"+JSON.stringify(frmobj[frmkey]));
			if(frmobj[frmkey].hasOwnProperty('section_id')){
				if (frmobj[frmkey].title.search(new RegExp(searchword)) != -1) {
					rescount = rescount +1;
					html+='<li><a href="#searchresult" onClick="forminfobysection('+frmobj[frmkey].section_id+');" data-transition="none">'+frmobj[frmkey].title+'</a></li>';
				}
			}
		}
		
  }

	actaList.append(html);
	actaList.listview( "refresh" );
	$("#section_searcword_list").highlight(searchword);
	 if(rescount < 1){
		$("#sec_search_message").html("Sorry no result found");
	}
 }

// CATEGORY LIST PAGE 
function getCatInfo(ctjsondata){
	console.log(ctjsondata);
	var html = "";
	var catlist = $("#cat_list");
	catlist.empty();
	for(obj in ctjsondata.category){
		console.log(obj+"----"+ctjsondata.category[obj]);
		//html+='<br><div class="ui-block-a"  ><a  href="#actlistbycat"  onClick="listActbycat('+obj+');" class="ui-btn ui-link" data-transition="slide">'+ctjsondata.category[obj]+'</a></div>';
		html +='<br><button class="ui-btn ui-btn-b" onClick="listActbycat('+obj+');" >'+ctjsondata.category[obj]+'</button>';
	}
	catlist.append(html);
}

// LIST ACTION ID BY CATEGORY
function listActbycat(catid){
	$.mobile.changePage('#actlistbycat', { transition: "none"} );
	var lw = lawBook.getdata();
	var html = "";
	var actcatList = $("#actbycategory_list" );
	actcatList.empty();
	//console.log("==="+JSON.stringify(lw.actindex));
	var i=1;
	for(cobj in lw.actindex){
		if(lw.actindex[cobj].cat_id == catid ){
			console.log("===>"+lw.actindex[cobj].title);
			html+='<li><a href="#searchin" onClick="setactInfo('+lw.actindex[cobj].id+');" data-transition="none">'+i+'. '+lw.actindex[cobj].title+'</a></li>';
			i++;
		}
	}
	actcatList.append(html);
	actcatList.listview( "refresh" );

	
 }

//
function setactInfo(act_id){
	var lw = lawBook.getdata();
	console.log("->"+lw);
	lw.currentact_id = act_id;
	//alert("da"+act_id);
	lawBook.setdata(lw);
	console.log(act_id+"->CURRENT ACTION ID"+lw.currentact_id);
	
}

function getCurrentActionTItle(){
	var lw = lawBook.getdata();
	var act_title =""
	//console.log(JSON.stringify(lw));
	//console.log("==>"+lw.actindex[ lw.currentact_id -1 ].title);	 // FOR ACTION ID	
	//	return lw.actindex[ lw.currentact_id -1 ].title;
	
	for(aobj in lw.actindex){
		if(lw.actindex[aobj].id == lw.currentact_id ){
			console.log("===>"+lw.actindex[aobj].title);
			act_title = lw.actindex[aobj].title;
		}
	}
	return  act_title;
		
}

// SET THE CURRENT SECTION ID IN TO THE LW 
function getsectionInfo(section_id, rfrom){
	getsectionInfo(section_id,rfrom,-1,-1);
}

function getsectionInfo(section_id,rfrom,next,prev){
	var lw = lawBook.getdata();
	console.log(lw);
	lw.currentsection_id = section_id;
	lw.temp_section_id = section_id;
	lw.next_section_id = next;
	lw.prev_section_id = prev;
	console.log(lw.currentsection_id);
	lawBook.setdata(lw);
	console.log("-------------------INSIDE SEARCH");
	actinfobysection('pres',rfrom);
}

function actinfobysectionnew(action){
	var lw = lawBook.getdata();
	if(action == "next"){
		section_id = lw.next_section_id;
	}else if(action == "prev"){
		section_id = lw.prev_section_id;
	}else {
		section_id = lw.currentsection_id;
	}
	$('#'+section_id+'_li').trigger('click');
}

function actinfobysection(action,from){
	// DAM WE HAV TO MODIFY THE JSON STRUCTURE  TO PICK THE SECTION DIRECTLY USING THE ID	
	console.log("------------------------------------->"+action);
	var lw = lawBook.getdata();
	//console.log("====>"+JSON.stringify(lw.action_info.section));
	var section_id = lw.currentsection_id;
	console.log("section_id=>"+section_id);
	
	if(section_id){
		console.log('called');
		lw.temp_section_id = section_id;
		//lw.temp = temp;
		lawBook.setdata(lw);
		var secobj = lw.action_info.section;
		for(sobjparam in secobj){
			var sec = secobj[sobjparam];
			for(i in sec){
				//console.log("--->"+sec[i].section_id+"---"+sec[i].title);
				// DAMO NEED TO CHECK OBJ PRESENT
				//console.log(section_id+"=====>"+sec[i].section_id);
				if(sec[i].hasOwnProperty('section_id')){
					//console.log(sec[i].section_id);
						if(sec[i].section_id == section_id ){
						//console.log("matched");
						//console.log(sec[i].title+"===>"+sec[i].content);
						//$("#sec_apg_title").html(sec[i].section_id+". "+sec[i].title);
						if(from == "0"){
							$("#search_sec_apg_title").html(sec[i].title);
							$("#search_sec_apg_content").html(sec[i].content);
							$("#search_sec_apg_title").css({ 'color': 'red', 'font-weight': 'bold', 'font-size': '120%' });
						}else {
							$("#sec_apg_title").html(sec[i].title);
							$("#sec_apg_content").html(sec[i].content);
							$("#sec_apg_title").css({ 'color': 'red', 'font-weight': 'bold', 'font-size': '120%' });
						
						}
					}
				}
			}
			

		}
	}else{
		// DAMO HAVE TO DISABLE THE PREVIOUS BUTTON UI
	}
//	console.log(secobj);
	
	
}

function forminfobysection(section_id){
	//console.log("====>"+JSON.stringify(lw.action_info.section));
	var lw = lawBook.getdata();
	console.log("section_id=>"+section_id);
	if(section_id > 0 ){
		var frmobj = lw.action_info.formdata;		
		for(frmkey in frmobj){		
			console.log("--->:"+frmkey+"===>"+JSON.stringify(frmobj[frmkey]));
			if(frmobj[frmkey].hasOwnProperty('section_id')){
				$("#search_sec_apg_title").html(frmobj[frmkey].title);
				$("#search_sec_apg_content").html(frmobj[frmkey].content);
				$("#search_sec_apg_title").css({ 'color': 'red', 'font-weight': 'bold', 'font-size': '120%' });
			}
		}
	}else{
		// DAMO HAVE TO DISABLE THE PREVIOUS BUTTON UI
	}
//	console.log(secobj);
	
	
}

//LOCAL STORAGE
var lawBook = ( function($, undefined ){
	var storage = localStorage;
	var _setdata = function(data) {
		storage.setItem('lw', JSON.stringify(data));
		return this;
	}
	var _getdata = function(key) {
		var data = JSON.parse(storage.getItem('lw'));
		if (key != undefined) {
			if ( key in data)
				data = data[key];
			else
			return null;
		}
		return $.extend(true, {}, data);
	}
	var _clear = function() {
			s.removeItem('lw');
			for (var i in this) {
				delete this[i];
			}
			this.setdata = _setdata;
			this.getdata = _getdata;
			this.clear = _clear;
			return this;
		}
	return {
			setdata : _setdata,
			getdata : _getdata,
			
		}
	
}( jQuery ));