document.getElementById('xButton').addEventListener('click', removePopUp(), false);

function removePopUp() {
    var notification = document.getElementById('notification');

    
    notification.innerHTML = "";
}


/**
 * 
 * 
 * <div class="popUp" id="notification">

            <div id="xBar">
                <p id="notificationName">Attention!</p>
                <p id="xButton" class="xButton">x</p>
            </div>
            <h4>Sign up for our Email List!</h4>

        </div>

        <script src="js/removePopUp.js"></script>
 * 
 * */





