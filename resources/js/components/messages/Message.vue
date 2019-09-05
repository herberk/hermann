<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card" v-for="message in messages">
                    <div><strong>{{ message.user.name }}</strong></div>
                    <div>
                        <p>{{ message.message }}</p>
                        <span class="float-right"><em>{{ message.created_at | timeago }}</em></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    moment.locale('es');
    export default {
        props: ['messages'],
        mounted() {
            console.log(this.messages)
        },
        filters: {
            timeago(value) {
                return moment.utc(value).local().fromNow()
            }
        }
    }
</script>
<style scoped>
    .panel{
        margin-bottom: 0;
    }
    .text-diff {
        font-size: 0.8em;
        color: #505050;
    }
    
</style>
