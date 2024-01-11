const bellIcon = document.querySelector('.bell-icon');
const notificationBadge = document.querySelector('.notification-badge');
let notificationCount = 0;

// Simulate receiving a new service request
function receiveServiceRequest() {
    notificationCount++;
    notificationBadge.textContent = notificationCount;
}

bellIcon.addEventListener('click', receiveServiceRequest);
