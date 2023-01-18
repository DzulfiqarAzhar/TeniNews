<template>
    <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
        <div class="card-body">
            <div class="small text-muted">{{ (new Date(featured.release_date)).toLocaleDateString('en-US', {year: 'numeric', month: 'long', day: '2-digit'}) }}</div>
            <h2 class="card-title">{{ featured.title }}</h2>
            <div class="card-text" v-if="dataLength > 300" v-html="featured.news_content.substr(0,300) + '...'"></div>
            <div class="card-text" v-else v-html="featured.news_content"></div>
            <a class="btn btn-primary" :href="serverHost + '/content'">Read more →</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6" v-for="(item, index) in news.slice(1)" :key="index">
            <!-- Blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ (new Date(item.release_date)).toLocaleDateString('en-US', {year: 'numeric', month: 'long', day: '2-digit'}) }}</div>
                    <h2 class="card-title h4">{{ item.title }}</h2>
                    <div class="card-text" v-if="item.news_content.length > 300" v-html="item.news_content.substr(0, 300) + '...'"></div>
                    <div class="card-text" v-else v-html="item.news_content"></div>
                    <a class="btn btn-primary" :href="serverHost + '/content'">Read more →</a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: [],
        data() {
            return {
                news: [],
                featured: [],
                dataLength: 0,
                serverHost: window.location.href.substr(0, window.location.href.lastIndexOf('/')),
            }
        },
        created() {
            this.fetchNews();
        },
        methods: {
            async fetchNews() {
                await axios.get('/api/getNews').then(response => {
                    this.news = response.data.result;
                    this.featured = this.news[0];
                    this.dataLength = this.featured.news_content.length;
                    console.log('News Record Count: ' + this.news.length);
                })
            },
            removeTags(strdata) {
                if ((strdata == null) || (strdata == ''))
                    return false;
                else
                    strdata = strdata.toString();
                return strdata.replace( /(<([^>]+)>)/ig, '');
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
