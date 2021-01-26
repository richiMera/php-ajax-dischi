import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue ({
  el: "#root",
  data: {
    discs: [],
    genreSelected: "",
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
  },
  methods: {
    filterGenre: function() {
      var self = this;
      axios
      .get("server.php", {
        params: {
          genre: self.genreSelected
        }
      })
      .then(
        function(response) {
          self.discs = response.data;
          console.log(self.discs);
        }
      )
    }
  }
})
