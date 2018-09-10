<template>
                        
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <i class="fa fa-globe"></i>الإشعارات <span class="badge">
            {{ unreadNotifications.lenght }}
            </span>
        </a>

        <ul class="dropdown-menu drpDwnMenu2Right" role="menu">


        <notification-item></notification-item>




            
            
        </ul>
    </li>

                
</template>



<script>
    export default {
        props:['unreads', 'userId'],
        data(){
            return{
                unreadNotifications: this.unreads
            }
        },
        mounted() {
            console.log('Component mounted.')

            Echo.private('App.User.' + this.userId)
            .notification((notification) => {
                console.log(notification.type);

                let newUnreadNotification = { data:{ pushTime: Date.now() ,building: notification, user: notification.user } };
                this.unreadNotifications.push( newUnreadNotification );

            });
        }
    }
</script>
