import create_config from "@kucrut/vite-for-wp";
import vue from "@vitejs/plugin-vue";

// https://vitejs.dev/config/
export default create_config("app/src/main.js", "app/dist", {
	plugins: [vue()],
});
