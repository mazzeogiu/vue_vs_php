<div id="app" class="lobby-container">
    <ul>
        <li class="name">
            <i class="fas fa-search"></i>
            <input v-model="searchKey" type="search" class="search" placeholder="Entrez le nom d'un vin...">
        </li>
        <li class="country">
            <i class="fas fa-globe-europe"></i>
        </li>

        <li class="grapes">
            <i class="fas fa-wine-glass-alt"></i>
        </li>
    </ul>

    <div class="list-container">
        <div v-for="wine in search" :key="wine.id" class="wine-list">
            <div class="wine-card">
                <div class="card-header">
                    <h3> {{wine.name}} </h3>
                </div>
                <div class="container">
                    <div class="text-container">
                        <div class="buttons">
                            <h4>{{wine.year}}</h4>
                            <h4>{{wine.country}}</h4>
                            <h4>{{wine.grapes}}</h4>
                        </div>
                        <div class="location">
                            <span>{{wine.region}}</span>
                        </div>
                        <p>{{wine.description}}</p>
                    </div>
                    <img :src="imgUrl(wine.picture)" alt="bottle">
                </div>
            </div>
        </div>
    </div>
</div>