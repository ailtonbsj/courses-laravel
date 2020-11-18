<template>
  <site-template>
    <span slot="menuesquerdo">
      <img :src="`http://localhost:8000/${usuario.image}`" alt="Landing" class="responsive-img" />
    </span>
    <span slot="principal">
      <h2>Perfil</h2>
      <input type="text" placeholder="Nome" v-model="name" />
      <input type="email" placeholder="E-mail" v-model="email" />

      <div class="file-field input-field">
        <div class="btn">
          <span>Imagem</span>
          <input type="file" @change="salvaImagem" />
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" />
        </div>
      </div>

      <input type="password" placeholder="Senha" v-model="password" />
      <input
        type="password"
        placeholder="Confirmar Senha"
        v-model="password_confirmation"
      />
      <button class="btn mr-4" @click="perfil()">Atualizar</button>
    </span>
  </site-template>
</template>

<script>
import SiteTemplate from '../../templates/SiteTemplate'
export default {
  components: { SiteTemplate },
  data () {
    return {
      usuario: '',
      name: '',
      email: '',
      password: '',
      password_confirmation: '',
      image: ''
    }
  },
  created() {
    if (sessionStorage.getItem('usuario')) {
      this.usuario = JSON.parse(sessionStorage.getItem('usuario'))
      this.name = this.usuario.name
      this.email = this.usuario.email
    }
  },
  methods: {
    perfil () {
      this.$http.put(`/perfil`, {
        name: this.name,
        email: this.email,
        password: this.password,
        password_confirmation: this.password_confirmation,
        image: this.image
      }, {"headers": {
        "authorization": `Bearer ${this.usuario.token}`
      }})
        .then(response => {
          if(response.data.token) {
            this.usuario = response.data;
            sessionStorage.setItem('usuario', JSON.stringify(response.data));
            alert("Atualizado!");
          } else {
            let erros = ''
            for(let erro of Object.values(response.data)) {
              erros += erro + ' '
            }
            alert(erros)
          }
        })
        .catch(e => {
          alert(e);
        })
    },
    salvaImagem(e) {
      let arquivo = e.target.files || e.dataTransfer.files;
      if(!arquivo.length) {
        return;
      }
      let reader = new FileReader();
      reader.onloadend = (ev) => {
        this.image = ev.target.result;
      }
      reader.readAsDataURL(arquivo[0]);
    }
  }
}
</script>

<style>
.mr-4 {
  margin-right: 4px;
}
</style>