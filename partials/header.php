
<header>
  <img src="https://1000logos.net/wp-content/uploads/2017/08/Spotify-Logo.png" alt="">
  <div class="select_box">
    <select  v-model="genreSelected">
      <option value="">All</option>
      <option value="rock">Rock</option>
      <option value="jazz">Jazz</option>
      <option value="metal">Metal</option>
      <option value="pop">Pop</option>
    </select>
    <button type="submit" @click="filterGenre">Search</button>
  </div>
</header>
