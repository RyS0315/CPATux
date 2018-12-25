function ShowNewEvent(){
    var div = document.getElementById('event-prompt');
    div.classList.remove('hidden');
    $(div).fadeIn();
    var page = document.body;
    var height = document.body.scrollTop;
    page.setAttribute('style' , 'overflow-y:hidden');
    page.style.top -= height;

}

function cancelEvent(){
    var div = document.getElementById('event-prompt');
    div.classList.add('hidden');
    $(div).fadeOut();
    var page = document.body;
    page.setAttribute('style' , 'overflow-y:auto');
    var height = document.body.scrollTop;
    document.body.scrollTop = height;
}

function nameDesc(){
    var olddiv = document.getElementById('content-date');
    olddiv.classList.add('hidden');
    var newdiv = document.getElementById('content-name');
    newdiv.classList.remove('hidden');
    $(newdiv).fadeIn();
}

function dateDesc(){
    var newdiv = document.getElementById('content-date');
    newdiv.classList.remove('hidden');
    $(newdiv).fadeIn();

    var bcname = document.getElementById('BC-Name');
    bcname.classList.add('bc-complete');
    bcname.classList.remove('bc-visible');
    var bcdate = document.getElementById('BC-Date');
    bcdate.classList.add('bc-visible');

    var contbutton = document.getElementById('nextDesc');
    contbutton.onclick = function(){
        typeDesc();
    }


}

function typeDesc(){
    var newdiv = document.getElementById('content-type');
    newdiv.classList.remove('hidden');
    $(newdiv).fadeIn();

    var bcname = document.getElementById('BC-Date');
    bcname.classList.add('bc-complete');
    bcname.classList.remove('bc-visible');
    var bcdate = document.getElementById('BC-Type');
    bcdate.classList.add('bc-visible');

    var contbutton = document.getElementById('nextDesc');
    contbutton.onclick = function(){
        partyDesc();
    }
}

function partyDesc(){
    var newdiv = document.getElementById('content-party');
    newdiv.classList.remove('hidden');
    $(newdiv).fadeIn();

    var bcname = document.getElementById('BC-Type');
    bcname.classList.add('bc-complete');
    bcname.classList.remove('bc-visible');
    var bcdate = document.getElementById('BC-Party');
    bcdate.classList.add('bc-visible');

    var contbutton = document.getElementById('nextDesc');
    contbutton.innerHTML = 'Create Event';
    contbutton.onclick = function(){
        submitEvent();
    }
}



function submitEvent(){
    var button = document.getElementById('new-event-click');
    button.click();
}

function addPartyMember(counter){

    var firstinp = document.getElementById('first-input--'+counter);
    var roleinp = document.getElementById('role-input--'+counter);
    var lastinp = document.getElementById('last-input--'+counter);
    var thisdiv = document.getElementById('party-member--'+counter);
    var exstmsg = document.getElementById('error-msg');

    if(exstmsg){
        thisdiv.removeChild(exstmsg);
    }

    var check = checkInps(firstinp, roleinp);
    if(check){
        var firstval = firstinp.value;
        var lastval = lastinp.value;
        
        var listcounter = document.createElement('p');
        listcounter.classList.add('party-member-desc');
        listcounter.innerHTML = counter +')';
        var firstdesc = document.createElement('p');
        firstdesc.classList.add('party-member-desc');
        firstdesc.innerHTML = firstval;
        
        var lastdesc = document.createElement('p');
        lastdesc.classList.add('party-member-desc');
        lastdesc.innerHTML = lastval;

        var dropbutton = document.createElement('img');
        dropbutton.setAttribute('src', 'images/minus-icon.png');
        dropbutton.classList.add('drop-party-member');
        dropbutton.setAttribute('id', 'drop-party-member--'+counter);
        dropbutton.setAttribute('onclick', 'dropPartyMember('+counter+')');
        
        var button = document.getElementById('add-party-member--'+counter);
        button.classList.add('hidden');
        thisdiv.appendChild(dropbutton);
        // thisdiv.appendChild(listcounter);
        thisdiv.appendChild(firstdesc);
        thisdiv.appendChild(lastdesc);
        
        firstinp.classList.add('hidden');
        lastinp.classList.add('hidden');
        roleinp.classList.add('hidden');
        
        newcounter = counter + 1;
        var newfirstinp = document.createElement('input');
        var newlastinp = document.createElement('input');
        var newdiv = document.createElement('div');
        var newbutton = document.createElement('img');
        
        newdiv.classList.add('party-member');
        newdiv.setAttribute('id', 'party-member--'+newcounter);
        
        newfirstinp.setAttribute('type', 'text');
        newfirstinp.setAttribute('name', 'party-member-first--'+newcounter);
        newfirstinp.setAttribute('placeholder', 'First Name');
        newfirstinp.setAttribute('class', 'name-input');
        newfirstinp.setAttribute('id', 'first-input--'+newcounter);
        
        newlastinp.setAttribute('type', 'text');
        newlastinp.setAttribute('name', 'party-member-last--'+newcounter);
        newlastinp.setAttribute('placeholder', 'Last Name');
        newlastinp.setAttribute('class', 'name-input');
        newlastinp.setAttribute('id', 'last-input--'+newcounter);
        
        newbutton.setAttribute('src', 'images/plus-icon.png');
        newbutton.setAttribute('class', 'add-party-member');
        newbutton.setAttribute('id', 'add-party-member--'+newcounter);
        newbutton.setAttribute('onclick', 'addPartyMember('+newcounter+')');
        
        var parentdiv = document.getElementById('content-party');
        parentdiv.appendChild(newdiv);
        newdiv.appendChild(newbutton);
        newdiv.appendChild(newfirstinp);
        newdiv.appendChild(newlastinp);
    }else{
        var msg = document.createElement('p');
        firstinp.setAttribute('style' , 'border-color:#ff2222');
        roleinp.setAttribute('style' , 'border-color:#ff2222');
        msg.innerHTML = 'These fields are Required';
        msg.classList.add('error-msg');
        msg.setAttribute('id', 'error-msg');
        thisdiv.appendChild(msg);
    }      
}
    
function checkInps(first, role){
    if(first.value != '' && role.value != ''){
        return true;
    }else{
        return false;
    }
}

function dropPartyMember(num){
    var dropdiv = document.getElementById('party-member--'+num);
    var parentdiv = document.getElementById('content-party');
    parentdiv.removeChild(dropdiv);
}

function openEvent(event){
    var id = event.id;
    type = id.substring(0, id.lastIndexOf('--'));
    id = id.replace(type + '--', '');
    if(type != 'Event-Leader'){
        var button = document.getElementById('event-button--'+id);
        console.log(button);
        button.click();
    }
}