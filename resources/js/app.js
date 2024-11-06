import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new calendar(calendarEl, {
        plugins: [ dayGridPlugin, timeGridPlugin, interactionPlugin ],
        initialView: 'timeGridWeek',  // Weekview zoals Google Calendar
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        editable: true,  // Hiermee kun je events slepen
        selectable: true,  // Hiermee kun je een tijdvak selecteren om nieuwe events toe te voegen
        events: [
            // Hier komen je afspraken uit de database
        ],
        eventClick: function(info) {
            alert('Event: ' + info.event.title);
            // Voeg hier een modal of popup toe voor gedetailleerde eventinformatie
        }
    });

    calendar.render();
});