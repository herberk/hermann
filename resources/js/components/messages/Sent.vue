<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="card">
                    <div class="panel-body">
                        <form @submit.prevent.keyup="sent">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="message.message">
                            </div>
                            <div class="form-group">
                                <button type="submit" class=" btn btn-primary">Enviarrr</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['user'],
    data() {
        return {
            message: {
                message: '',
                user: this.user            }
        }
    },
    methods: {
        sent() {
            this.$emit('messagesent', this.message)
            this.message = {}
        }
    }
    }
</script>
