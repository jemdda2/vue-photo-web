<template>
	<footer class="footer">
		<button v-if="isLogin" class="button button--link" @click="logout">
			Logout
		</button>
		<RouterLink v-else class="button button--link" to="/login">
			Login / Register
		</RouterLink>
	</footer>
</template>

<script>
import { mapState, mapGetters } from 'vuex'

export default {
	computed: {
		...mapState({
			apiSttus: state => state.auth.apiSttus
		}),
		...mapGetters({
			isLogin: 'auth/check'
		})
	},
	methods: {
		async logout() {
			await this.$store.dispatch('auth/logout')

			if (this.apiSttus) {
				this.$router.push('/login')
			}
		}
	}
}
</script>