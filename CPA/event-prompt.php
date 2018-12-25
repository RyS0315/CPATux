<div id='event-prompt' class='overlay hidden'>
    <div class='event-box'>
        <div class='event-box-title'>
        <h1 class='new-event-title'>Add A New Event</h1>
        </div>

        <div class='event-box-breadcrumbs'>
            <p class='breadcrumb bc-visible' id='BC-Name'>Name</p>
            <p class='breadcrumb' id='BC-Date'>Date</p>
            <p class='breadcrumb' id='BC-Type'>Type</p>
            <p class='breadcrumb' id='BC-Party'>Party</p>
        </div>
        <form method='post' action='php/createEvent.php'>
        <div class='event-box-content'>
            <div class='event-content event-content-Name' id='content-name'>
                <h1 class='event-content-title'>Event Name</h1>
                <p class='content-title-desc'>(Name of Groom or Quinceanera)</p>
                <input type='text' name='event-name' placeholder='Event Name' id='name-input'>
            </div>

            <div class='event-content event-content-Date hidden' id='content-date'>
                <h1 class='event-content-title'>Event Date</h1></br>
                <input type='Date' name='event-date' placeholder='Event Name' id='date-input'>
            </div>

            <div class='event-content event-content-Type hidden' id='content-type'>
                <h1 class='event-content-title'>Event Type</h1>
                <p class='content-title-desc'>(Wedding, Party, or Banquet)</p>
                <input type='text' name='event-type' placeholder='Event Type' id='type-input'>
            </div>

            <div class='event-content event-content-Party hidden' id='content-party'>
                <h1 class='event-content-title'>Party Members</h1>
                <div class='party-member' id='party-member--1'>
                <img  class='add-party-member' id='add-party-member--1' src='images/plus-icon.png' onclick='addPartyMember(1)'>
                <input type='text' name='party-member-first--1' placeholder='First Name' class='name-input' id='first-input--1'>
                <input type='text' name='party-member-last--1' placeholder='Last Name' class='name-input' id='last-input--1'>
                <input type='text' name='party-member-role--1' placeholder='Role' class='name-input' id='role-input--1'>
                </div>
            </div>

        </div>

        <div class='event-box-submit'>
            <div id='lastDesc' class='button' onclick='cancelEvent()'>Cancel Event</div>
            <div id='nextDesc' class='button' onclick='dateDesc()'>Continue</div>
        </div>
        <button type='submit' name='createEvent' id='new-event-click' class='hidden'></button>
        </form>

    </div>
</div>