# Decentralized_Application for Attendance_System

This dapp uses QR code scanner to update attendance by creating smart contract so that there is no modifications to attendance and proxies.


## Dependencies

* ethereumjs-testrpc 
* web3@0.20.1
* solc

Install missing dependencies with [npm](https://www.npmjs.com/). 

```
> git clone gthub.com/rajathv/dapp-Attendance-system
> cd Your_First_Decentralized_Application
> npm install 
```

## Usage

After all dependancies are installed, run the `testrpc` service with:
```
node_modules/ethereumjs-testrpc/build/cli.node.js
```

Run the following commands to open the node console then deploy your contract to the test chain

```
siraj:~/hello_world_voting$ node
> Web3 = require('web3')
> web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
> code = fs.readFileSync('Voting.sol').toString()
> solc = require('solc')
> compiledCode = solc.compile(code)
> abiDefinition = JSON.parse(compiledCode.contracts[':Voting'].interface)
> VotingContract = web3.eth.contract(abiDefinition)
> byteCode = compiledCode.contracts[':Voting'].bytecode
> deployedContract = VotingContract.new(['Rama','Nick','Jose'],{data: byteCode, from: web3.eth.accounts[0], gas: 4700000})
> deployedContract.address
> contractInstance = VotingContract.at(deployedContract.address)
```


