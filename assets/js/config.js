var appConfig = {
    "auth0": {
        "domain": 'arvil.auth0.com',
        "audience": 'http://sf-react-auth0.test/api',
        "clientID": 'JucGZsEWOX0A6wQFVEJaSxi30fimySJR',
        "callbackRedirectUri": 'http://localhost:8081/callback',
        "logoutUri": 'http://localhost:8081/logout'
    },
    "api": {
        "public": 'http://localhost:8081/api/public',
        "private": 'http://localhost:8081/api/private',
    }
};

export default appConfig;