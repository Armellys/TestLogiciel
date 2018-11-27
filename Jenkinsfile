pipeline { 
    agent any 
    stages {
        
        stage('Install'){
            steps {
                sh 'cd TP_Mocha/;yarn'
                 
            }
        }
       
        stage('Test'){
            steps {
                sh 'cd TP_Mocha/;yarn add mocha;./node_modules/mocha/bin/mocha'
                 
            }
        }
    }
}
