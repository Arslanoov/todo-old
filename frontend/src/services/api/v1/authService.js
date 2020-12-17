import axios from "axios";
import qs from "qs";

export default class AuthService {
  auth(username, password) {
    return axios.post('/api/oauth/auth', qs.stringify({
        grant_type: 'password',
        username: username,
        password: password,
        client_id: 'app',
        client_secret: '',
        access_type: 'offline'
      }))
  }

  async refresh(token) {
    await axios.post('/api/oauth/auth', {
        grant_type: 'refresh_token',
        refresh_token: token,
        client_id: 'app',
        client_secret: ''
      })
      .then(response => response.data)
  }
}
