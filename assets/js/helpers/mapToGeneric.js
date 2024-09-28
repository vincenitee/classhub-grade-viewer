export function mapToGeneric(data){
    return data.map(item => ({
        id: item[0],
        value: item[1]
    }));
}