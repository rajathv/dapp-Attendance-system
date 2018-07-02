web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
abi = JSON.parse('[{"constant":false,"inputs":[{"name":"candidate","type":"bytes32"}],"name":"totalVotesFor","outputs":[{"name":"","type":"uint8"}],"payable":false,"type":"function"},{"constant":false,"inputs":[{"name":"candidate","type":"bytes32"}],"name":"validCandidate","outputs":[{"name":"","type":"bool"}],"payable":false,"type":"function"},{"constant":true,"inputs":[{"name":"","type":"bytes32"}],"name":"votesReceived","outputs":[{"name":"","type":"uint8"}],"payable":false,"type":"function"},{"constant":true,"inputs":[{"name":"x","type":"bytes32"}],"name":"bytes32ToString","outputs":[{"name":"","type":"string"}],"payable":false,"type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"candidateList","outputs":[{"name":"","type":"bytes32"}],"payable":false,"type":"function"},{"constant":false,"inputs":[{"name":"candidate","type":"bytes32"}],"name":"voteForCandidate","outputs":[],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"contractOwner","outputs":[{"name":"","type":"address"}],"payable":false,"type":"function"},{"inputs":[{"name":"candidateNames","type":"bytes32[]"}],"payable":false,"type":"constructor"}]')
VotingContract = web3.eth.contract(abi);
// In your nodejs console, execute contractInstance.address to get the address at which the contract is deployed and change the line below to use your deployed address
contractInstance = VotingContract.at('0x6ef4c050f13202920640f406b1be3c3cdd4b8cfe');
candidates = ["4VV15EE001","4VV15EE002","4VV15EE003","4VV15EE004"];

function voteForCandidate(candidateName) {
  contractInstance.voteForCandidate(candidateName, {from: web3.eth.accounts[1]}, function() {
    var attendance = contractInstance.totalVotesFor.call(candidateName).toString();
  });
}

function voteForCandidate1(candidateName) {
  contractInstance.voteForCandidate(candidateName, {from: web3.eth.accounts[1]}, function() {
    $("#" + candidateNames).html(contractInstance.totalVotesFor.call(candidateName).toString());
  });
}

$(document).ready(function() {
  for (var i = 0; i < candidates.length; i++) {
    var name = candidates[i];
    console.log(name);
    var val = contractInstance.totalVotesFor.call(name).toString();
    console.log(val);
    $("#"+name).html(val);
  }
});
