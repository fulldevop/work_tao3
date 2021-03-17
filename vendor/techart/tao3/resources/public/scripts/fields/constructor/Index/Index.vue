<template>
    <div class="Index"></div>
	<div id="editor">
		<textarea :value="input" @input="update"></textarea>
		<div v-html="compiledMarkdown"></div>
	</div>
</template>

<script src="./_Index.js" lang="js"></script>
<style src="./_Index.scss" lang="scss" scoped></style>


<script src="https://unpkg.com/marked@0.3.6"></script>
{{--<script src="https://unpkg.com/lodash@4.16.0"></script>--}}



<script>
const element = document.getElementById('constructor-vue');

export default () => {
	new Vue({
		el: element,
		render: h => h(Index)
	});
};
$(function () {
	new Vue({
		el: "#editor",
		data: {
			input: "# hello"
		},
		computed: {
			compiledMarkdown: function() {
				return marked(this.input, { sanitize: true });
			}
		},
		methods: {
			update: function(e) {
				this.input = e.target.value;
			}
		}
	});
});

/*
* methods: {
			update: _.debounce(function(e) {
				this.input = e.target.value;
			}, 300)
		}
* */
</script>
