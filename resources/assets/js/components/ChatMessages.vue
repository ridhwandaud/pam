<template>
	<ul class="chat">
		<li class="left clearfix" v-for="message in messages">
			<div class="chat-body clearfix">
				<div class="pull-left">
					<img v-bind:src="message.user.img_path" alt="" height="50">
				</div>
				<div class="header" style="margin-left:60px">
					<strong class="primary-font">
						{{ message.user.name }}
					</strong>
				</div>
				<p style="margin-left:60px">
					{{ message.message }}
				</p>
			</div>
		</li>
	</ul>
	
</template>

<script>
  	export default {
    	props: ['messages']
  	};
</script>