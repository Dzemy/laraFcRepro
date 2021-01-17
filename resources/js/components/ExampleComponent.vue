<script>
    import FullCalendar from '@fullcalendar/vue'
    import dayGridPlugin from '@fullcalendar/daygrid'
    import interactionPlugin from '@fullcalendar/interaction'



    export default {
        components: {
            FullCalendar // make the <FullCalendar> tag available
        },
        data() {
            return {
                calendarOptions: {
                    plugins: [ dayGridPlugin, interactionPlugin ],
                    initialView: 'dayGridMonth',
                    dateClick: this.handleDateClick,
                    events: [
                        { title: 'Rezervace x', start: '2021-01-01', end: '2021-01-05' },
                        { title: 'Rezervace', start: '2021-01-08', end: '2021-01-20', color: 'cyan' }
                    ]
                }
            }
        }
        }
    }
</script>

<template>
    <div class="kuruku">
        <FullCalendar :options="calendarOptions" />
    </div>
</template>

