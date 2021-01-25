import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue ({
  el: "#root",
  data: {
    discs: [],
  },
  mounted: function() {
    var self = this;
    axios
    .get("server.php")
    .then(
      function(response) {
        self.discs = response.data;
        console.log(self.discs);
      }
    )
  }
})
